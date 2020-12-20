  <div class=theme>
      <label>
        <input id=themeCheckbox onclick='changeCSS("style-<?=(isset($_GET['theme'])&&$_GET['theme']=='dark')?'light':'dark';?>.css")' type=checkbox style=display:none>
        <img id=moonImg class=noselect src=moon.svg>
      </label>
  </div>

  <script>
  // function modified from lukeo.link/2o5e
  function changeCSS(cssFile) {
      var oldlink = document.getElementsByTagName("link").item(1);
      
      var newlink = document.createElement("link");
      newlink.setAttribute("rel", "stylesheet");
      newlink.setAttribute("type", "text/css");
      newlink.setAttribute("href", cssFile);
      
      document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
      
      function addGet(j){
          for(var i = 1; i <= j; i++){
              var el = document.getElementById("js"+i);
              var oldAttr = el.getAttribute("href");
              el.setAttribute("href", oldAttr+"?theme=dark");
          }
      }
      function removeGet(j){
          for(var i = 1; i <= j; i++){
              var el = document.getElementById("js"+i);
              var oldAttr = el.getAttribute("href");
              var replaced = oldAttr.replace("?theme=dark", "");
              el.setAttribute("href", replaced);
          }
      }
      
      var checkbox = document.getElementById("themeCheckbox");
      switch(cssFile){
          case "style-light.css":
              removeGet(4);
              checkbox.setAttribute("onclick", "changeCSS('style-dark.css')");
              break;
          case "style-dark.css":
              addGet(4);
              checkbox.setAttribute("onclick", "changeCSS('style-light.css')");
              break;
      }
  }
  </script>
  <?php
        $addon = (isset($_GET["theme"])&&$_GET["theme"]=="dark") ? "?theme=dark" : "" ;
  ?>
  <div id=top>
    <h1 id="me"><span class="letter">S</span><span class="letter">A</span><span class="letter">B</span><span class="letter">R</span><span class="letter">I</span><span class="letter">N</span><span class="letter">A</span> <span class="letter">C</span><span class="letter">H</span><span class="letter">I</span><span class="letter">N</span></h1>
    <div id=menu>
      <h3 class=mi><a id=js1 href=/<?=$addon?>>HOME</a></h3><!--
   --><h3 class=mi><a id=js2 href=about.php<?=$addon?>>ABOUT</a></h3><!--
   --><h3 class=mi><a id=js3 href=projects.php<?=$addon?>>RIDDLE</a></h3>
    </div>
  </div>
