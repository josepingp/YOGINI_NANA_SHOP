


<footer class="">
    
<?php include './pages/modules/about-me.php'; ?>     

</footer>

<?php 
require_once "./js/base.php";

if (file_exists('./js/' . ltrim(preg_replace('/Yoguini_Nana_Shop/', '', $_SERVER['REQUEST_URI']),'/') . '.php')) {
    require './js/' . ltrim(preg_replace('/Yoguini_Nana_Shop/', '', $_SERVER['REQUEST_URI']),'/') . '.php';
}
?>
</body>
</html>