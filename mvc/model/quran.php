<?
class QuranModel
{
    public static function selectAyaPage($page)
    {
        $db = Db::getInstance();
        // dump($page);
        // exit;

        $records = $db->query("select * from quran where page=$page[0] ");
        return $records;
    }
}
