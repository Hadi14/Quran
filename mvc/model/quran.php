<?
class QuranModel
{
    public static function selectAyaPage($page)
    {
        // dump($page);
        // exit;
        $db = Db::getInstance();
        $p = (!array_key_exists(0, $page)) ? 1 : $page[0];
        // dump($page[0]);
        // dump($p);
        // exit;
        $records = $db->query("select * from quran where page=$p ");
        return $records;
    }

    public static function selectAllAya()
    {
        $db = Db::getInstance();
        $records = $db->query("select * from quran ");
        return $records;
    }
}
