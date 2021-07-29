<?php

class Lib_DateBase {

private static $instance; //(ýêçåìïëÿð îáúåêòà) Çàùèùàåì îò ñîçäàíèÿ ÷åðåç new Singleton

public static function getInstance() {//Âîçâðàùàåò åäèíñòâåííûé ýêçåìïëÿð êëàññà
		if (!is_object(self::$instance)) self::$instance = new self;
		return self::$instance;
    }

function query($query)
{

//func_num_args -  Âîçâðàùàåò êîëè÷åñòâî àðãóìåíòîâ, ïåðåäàííûõ ôóíêöèè

	if(($num_args = func_num_args()) > 1){
		$arg  = func_get_args();
		unset($arg[0]);
		//Âûâîäèò çíà÷åíèÿ ìàññèâà args, îòôîðìàòèðîâàííûå â ñîîòâåòñòâèè ñ àðãóìåíòîì format,

 		$connects = mysqli_connect('localhost', 'shopmag_user', 'pro100','lifeexampleshop');

		foreach($arg as $argument=>$value){
			$arg[$argument]=mysqli_real_escape_string($connects, $value); // ýêðàíèðóåì êàâû÷êè äëÿ âñåõ âõîäíûõ ïàðàìåòðîâ
		}

		$query = vsprintf($query,$arg);

	}


loger($query);

	$sql = mysqli_query($query);


	if(preg_match('`^(INSERT|UPDATE|DELETE|REPLACE)`i',$query,$null)){
		if($this->affected_rows($sql)){
			return $sql;
		}
	}else{
		if($this->num_rows($sql)){
			return $sql;
		}
	}

	return false;
}

function build_query($query,$array,$_devide = ',')
{
	if(is_array($array)){
		$part_query = '';
		foreach($array as $index=>$value){
			$part_query .= sprintf(" `%s` = '%s'".$_devide,$index,mysqli_real_escape_string($connects, $value));
		}
		$part_query = trim($part_query,$_devide);
		$query.=$part_query;
		return $this->query($query);
	}
	return false;
}

function build_part_query($array,$_devide = ',')
{
	$part_query="";
	if(is_array($array)){
		$part_query = '';
		foreach($array as $index=>$value){
			$part_query .= sprintf(" `%s` = '%s'".$_devide,$index,mysqli_real_escape_string($connects, $value));
		}
		$part_query = trim($part_query,$_devide);

	}
	return $part_query;
}

//mysql_fetch_object- Îáðàáàòûâàåò ðÿä ðåçóëüòàòà çàïðîñà è âîçâðàùàåò îáúåêò
function fetch_object($object)
{
	return @mysqli_fetch_object($object);
}

//mysql_num_rows() âîçâðàùàåò êîëè÷åñòâî ðÿäîâ ðåçóëüòàòà çàïðîñà.
function num_rows($object)
{
	return mysqli_num_rows($object);
}

//mysql_affected_rows() âîçâðàùàåò êîëè÷åñòâî ðÿäîâ, çàòðîíóòûõ ïîñëåäíèì INSERT, UPDATE, DELETE çàïðîñîì ê ñåðâåðó, íà êîòîðûé ññûëàåòñÿ óêàçàòåëü link_identifier.
function affected_rows($object)
{
	return mysql_affected_rows();
}

function fetch_assoc($object)
{
	return mysql_fetch_assoc($object);
}

//mysql_insert_id -  Âîçâðàùàåò ID, ñãåíåðèðîâàííûé ïðè ïîñëåäíåì INSERT-çàïðîñå.
function insert_id()
{
	return mysql_insert_id();
}
}
