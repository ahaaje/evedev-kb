<?php
/**
 * @package EDK
 */
class Navigation
{
	private $type = 'top';
	private $page = '';
	private $site = null;
	private	$qry = null;

	function Navigation($site = KB_SITE)
	{
		$this->site = $site;
	}

	private function execQuery()
	{
		$this->qry = DBFactory::getDBQuery();
		$query = "SELECT * FROM kb3_navigation".
			" WHERE nav_type = '$this->type'";

		$query .= " AND url NOT LIKE '%?a=contracts'";

		if (Killboard::hasCampaigns() == false)
		{
			$query .= " AND url NOT LIKE '%?a=campaigns'";
			$query .= " AND url NOT LIKE '%/campaigns/'";
		}
		if (config::get('public_losses'))
		{
			$query .= " AND url NOT LIKE '%?a=losses'";
			$query .= " AND url NOT LIKE '%/losses/'";
		}
		if (!config::get('show_standings'))
		{
			$query .= " AND url NOT LIKE '%a=standings'";
			$query .= " AND url NOT LIKE '%/standings/'";
		}
		if (config::get('public_stats')=='remove')
		{
			$query .= " AND url NOT LIKE '%?a=self_detail'";
			$query .= " AND url NOT LIKE '%/self_detail/'";
		}
		$query .= " AND (page = '".$this->page."' OR page = 'ALL_PAGES') AND hidden = 0";
		$query .= " AND KBSITE = '" . $this->site . "' ORDER BY posnr";
		$this->qry->execute($query);

		// If no navigation table was found then make one.
		if(!$this->qry->recordCount())
		{
			$this->check_navigationtable();
			$this->qry->execute($query);
		}
	}

	private function getRow()
	{
		return $this->qry->getRow();
	}

	public function setNavType($type)
	{
		$this->type = $type;
	}

	public function generateMenu()
	{
		$this->execQuery();

		$menu = new Menu();
		while ($row = $this->getRow()) {
			$url = $row['url'];
			// Note that changing the standard naming will also remove any
			// translations.
			$menu->add($url , Language::get($row['descr']));
		}
		return $menu;
	}

	private function check_navigationtable()
	{
		$sql = "select count(KBSITE) as cnt from kb3_navigation WHERE KBSITE = '".$this->site."'";
		$qry = DBFactory::getDBQuery(true);
		// return false if query fails
		if(!$qry->execute($sql) || !($row = $qry->getRow())) {
			return false;
		}
		if($row['cnt'] == 0) {
			$this->reset();
		}
	}

	public function reset()
	{
		$sql = "DELETE from kb3_navigation WHERE KBSITE = '".$this->site."'";
		$qry = DBFactory::getDBQuery(true);
		$qry->autocommit(false);
		$qry->execute($sql);
		// return false if query fails
		if(!$qry->execute($sql)) {
			return false;
		}
		$sql = "INSERT INTO `kb3_navigation` (`nav_type`,`intern`,`descr` ,`url` ,`target`,`posnr`,`page` ,`hidden`,`KBSITE`) VALUES".
			" ('top',1,'Home','".KB_HOST."?a=home','_self',1,'ALL_PAGES',0,'".$this->site."'),".
			" ('top',1,'Campaigns','".KB_HOST."?a=campaigns','_self',2,'ALL_PAGES',0,'".$this->site."'),".
			" ('top',1,'Post Mail','".KB_HOST."?a=post','_self',3,'ALL_PAGES',0,'".$this->site."'),".
			" ('top',1,'Stats','".KB_HOST."?a=self_detail','_self',4,'ALL_PAGES',0,'".$this->site."'),".
			" ('top',1,'Awards','".KB_HOST."?a=awards','_self',5,'ALL_PAGES',0,'".$this->site."'),".
			" ('top',1,'Standings','".KB_HOST."?a=standings','_self',6,'ALL_PAGES',0,'".$this->site."'),".
			" ('top',1,'Search','".KB_HOST."?a=search','_self',7,'ALL_PAGES',0,'".$this->site."'),".
			" ('top',1,'Admin','".KB_HOST."?a=admin','_self',8,'ALL_PAGES',0,'".$this->site."'),".
			" ('top',1,'About','".KB_HOST."?a=about','_self',9,'ALL_PAGES',0,'".$this->site."');";
		$qry->execute($sql);
		$qry->autocommit(true);
		return true;
	}
}
