<? class Render
{
    public static function render($filePath, $data = array())
    {
        // echo "renderform";
        // dump($data);
        // exit;


        // extract($data);
        ob_start();
        // ($data[0]);
        require_once("mvc/view/" . $filePath);
        $out = ob_get_clean();
        require_once('theme/default.php');
    }
}
