<?
class PageController
{
    function home($page)
    {
        // if (!isset($_SESSION['uname'])) {
        //     // Render::render('user/login', array());
        //     header("Location:" . getBaseUrl() . 'user/login/');
        // } else {
        // if ($_SESSION['uname']) {
        //     $un = $_SESSION['uname'];
        //     $data['records'] = NoteModel::allNotes($un);
        // } else {
        //     $data['records']  = null;
        // }
        $records = QuranModel::selectAyaPage($page);
        $data['records'] = $records;
        Render::render('page/home.php', $records);
        // }
    }
    function all($page)
    {

        $records = QuranModel::selectAllAya();
        $data['records'] = $records;
        Render::render('page/all.php', $records);
        // }
    }
}
