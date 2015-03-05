<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75, user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=Anonymous+Pro' rel='stylesheet' type='text/css'>
           <link href='http://fonts.googleapis.com/css?family=Lobster&subset=cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300|Open+Sans:600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="style3.css">
    
    <!-- Core CSS file -->
<link rel="stylesheet" href="photoswipe/photoswipe.css"> 

<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite, 
     - preloader.gif (for browsers that do not support CSS animations) -->
<link rel="stylesheet" href="photoswipe/default-skin/default-skin.css"> 

<!-- Core JS file -->
<script src="photoswipe/photoswipe.min.js"></script> 

<!-- UI JS file -->
<script src="photoswipe/photoswipe-ui-default.min.js"></script> 
    
    

    <style>
          .text-wrapper {
              position: absolute; left:0; top:100%; height: 100%; width: 100%;
          }
          .events {
              position: absolute; left:0; top:220%; height: 100%; width: 100%;
          }
          .gallery {
              position: absolute; left:0; top:340%; height: 100%; width: 100%;
          }
      .bc-img-m {
           background: url(background.jpg) no-repeat center center;
    -webkit-background-size: cover; 
    -moz-background-size: cover;    
    -o-background-size: cover;      
    background-size: cover; 
      }
        .header-m {
                width: 100%;
                position: relative; 
                left:0;
                top: 40%;
                color: white;
                text-align: center;
            }
        
        h2 {
            text-align: center;
        }
        
        .text-wrapper h2 {
            margin-top: 5%;
        }
        
        .text-wrapper p {
            text-align: justify; 
            margin: 10% 5% 0% 5%;
        }
       .bc-img-m2 {
           background: url(background2.jpg) no-repeat center center;
    -webkit-background-size: cover; 
    -moz-background-size: cover;    
    -o-background-size: cover;      
    background-size: cover; 
      }
        .bc-img-m3 {
           background: url(background3.jpg) no-repeat center center;
    -webkit-background-size: cover; 
    -moz-background-size: cover;    
    -o-background-size: cover;      
    background-size: cover; 
      } 
        
    
    </style>
    
    
    <style>
        .my-simple-gallery {
  width: 100%;
  float: left;
}
.my-simple-gallery img {
  width: 100%;
  height: auto;
}
.my-simple-gallery figure {
  display: block;
  float: left;
  margin: 0 1% 1% 1%;
  width: 31%;
}
.my-simple-gallery figcaption {
  display: none;
}
      
    </style>
    
    
    </head>
    <body>
        <div class="bc-img-m" style="position: absolute; left:0; top:0; height: 100%; width: 100%;">
        <div class="header-m"><h1>СЕРГЕЙ МАРЧЕНКО</h1></div></div>
        
        <div class="text-wrapper">
            <h2>О себе</h2>
            <p>Сергей Марченко - молодой и талантливый художник. Работая в разных жанрах, он продолжает традиции русского реализма.
Получив классическое художественное образование в Московской средней художественной школе им. Томского, а затем в МГХАИ им. Сурикова на факультете станковой живописи в мастерской профессора Забелина, художник приобрел неоценимый опыт, дополненный работой зарубежом.
Обладатель премии РОСХ за лучший диплом и ордена "Служение искусству" 1й степени, С.Марченко сотрудничает с арт-галереями разных стран и участвует во многих выставках. 
Художник находится в постоянном творческом поиске, вкладывая в полотна свое уникальное виденье мира.</p>
        </div>
        
        
        <div class="bc-img-m2" style="position: absolute; left:0; top:200%; height: 20%; width: 100%;"></div>
        <div class="events">
            <div class="information" style ="top: 0%;important!">
           <div class="inner-wrapper-5">
               <red><h2>События</h2></red>
               <hr>
               <h3><red>14/02</red> Выставка на Луне</h3>
               <p>Сегодня я со своей выставкой выступаю на луне, буду рад всех видеть. Бесплатный вфод и печеньки</p>
               <hr>
               <h3><red>31/12</red> Поддержите друга</h3>
               <p>Прекрасная выставка моего хорошего друга Крамского. Велколепный автор приходите все</p>
               <hr>
               <h3><red>28/08</red> Lorem Ipsum</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quidem repellat saepe, beatae quod porro.</p>
           </div>
        </div>
        </div>
        
        <div class="bc-img-m3" style="position: absolute; left:0; top:320%; height: 20%; width: 100%;"></div>
        <div class="gallery">
            <h2>Галерея</h2>
       <h3 id="na">Натюрморт</h3>
        <div class="my-simple-gallery" id="na_gal" itemscope itemtype="http://schema.org/ImageGallery">
           <?php
// Соединяемся, выбираем базу данных
$link = mysql_connect('mysql.hostinger.ru', 'u604641457_admin', '3DJjNrGUt4')
    or die('Не удалось соединиться: ' . mysql_error());

mysql_select_db('u604641457_db') or die('Не удалось выбрать базу данных');

// Выполняем SQL-запрос
$query = "SELECT * FROM  `photos` WHERE TYPE =  'na'";
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

for ($i = 1; $i <= mysql_num_rows($result); $i++) {
    $l = mysql_fetch_row($result);
    echo "<figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageObject\">
      <a href=".$l[1]." itemprop=\"contentUrl\" data-size=".$l[3]."x".$l[4].">
          <img src=".$l[1]." itemprop=\"thumbnail\" alt=".$l[5]." />
      </a>
                                          <figcaption itemprop=\"caption description\">".$l[5]."</figcaption>                               
    </figure>";
}
// Освобождаем память от результата
mysql_free_result($result);

// Закрываем соединение
mysql_close($link);
?>
  </div>
       <h3 id="port">Портрет</h3>
        <div class="my-simple-gallery" id="port_gal" itemscope itemtype="http://schema.org/ImageGallery">
           <?php
// Соединяемся, выбираем базу данных
$link = mysql_connect('mysql.hostinger.ru', 'u604641457_admin', '3DJjNrGUt4')
    or die('Не удалось соединиться: ' . mysql_error());

mysql_select_db('u604641457_db') or die('Не удалось выбрать базу данных');

// Выполняем SQL-запрос
$query = "SELECT * FROM  `photos` WHERE TYPE =  'po'";
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

for ($i = 1; $i <= mysql_num_rows($result); $i++) {
    $l = mysql_fetch_row($result);
    echo "<figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageObject\">
      <a href=".$l[1]." itemprop=\"contentUrl\" data-size=".$l[3]."x".$l[4].">
          <img src=".$l[1]." itemprop=\"thumbnail\" alt=".$l[5]." />
      </a>
                                          <figcaption itemprop=\"caption description\">".$l[5]."</figcaption>                               
    </figure>";
}







// Освобождаем память от результата
mysql_free_result($result);

// Закрываем соединение
mysql_close($link);
?>
  </div>
       
       
        </div>
        
 
   
     
         
<!-- -------------------------------- -->   
   
   <!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
   
   <script>var initPhotoSwipeFromDOM = function(gallerySelector) {

	// parse slide data (url, title, size ...) from DOM elements 
	// (children of gallerySelector)
	var parseThumbnailElements = function(el) {
	    var thumbElements = el.childNodes,
	        numNodes = thumbElements.length,
	        items = [],
	        figureEl,
	        childElements,
	        linkEl,
	        size,
	        item;

	    for(var i = 0; i < numNodes; i++) {


	        figureEl = thumbElements[i]; // <figure> element

	        // include only element nodes 
	        if(figureEl.nodeType !== 1) {
				continue;
	        }

			linkEl = figureEl.children[0]; // <a> element
			
	        size = linkEl.getAttribute('data-size').split('x');

	        // create slide object
	        item = {
				src: linkEl.getAttribute('href'),
				w: parseInt(size[0], 10),
				h: parseInt(size[1], 10)
	        };

	        

	        if(figureEl.children.length > 1) {
	        	// <figcaption> content
	          	item.title = figureEl.children[1].innerHTML; 
	        }
 
	        if(linkEl.children.length > 0) {
	        	// <img> thumbnail element, retrieving thumbnail url
				item.msrc = linkEl.children[0].getAttribute('src');
	        } 
	       
			item.el = figureEl; // save link to element for getThumbBoundsFn
	        items.push(item);
	    }

	    return items;
	};

	// find nearest parent element
	var closest = function closest(el, fn) {
	    return el && ( fn(el) ? el : closest(el.parentNode, fn) );
	};

	// triggers when user clicks on thumbnail
	var onThumbnailsClick = function(e) {
	    e = e || window.event;
	    e.preventDefault ? e.preventDefault() : e.returnValue = false;

	    var eTarget = e.target || e.srcElement;

	    var clickedListItem = closest(eTarget, function(el) {
	        return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
	    });

	    if(!clickedListItem) {
	        return;
	    }


	    // find index of clicked item
	    var clickedGallery = clickedListItem.parentNode,
	    	childNodes = clickedListItem.parentNode.childNodes,
	        numChildNodes = childNodes.length,
	        nodeIndex = 0,
	        index;

	    for (var i = 0; i < numChildNodes; i++) {
	        if(childNodes[i].nodeType !== 1) { 
	            continue; 
	        }

	        if(childNodes[i] === clickedListItem) {
	            index = nodeIndex;
	            break;
	        }
	        nodeIndex++;
	    }



	    if(index >= 0) {
	        openPhotoSwipe( index, clickedGallery );
	    }
	    return false;
	};

	// parse picture index and gallery index from URL (#&pid=1&gid=2)
	var photoswipeParseHash = function() {
		var hash = window.location.hash.substring(1),
	    params = {};

	    if(hash.length < 5) {
	        return params;
	    }

	    var vars = hash.split('&');
	    for (var i = 0; i < vars.length; i++) {
	        if(!vars[i]) {
	            continue;
	        }
	        var pair = vars[i].split('=');  
	        if(pair.length < 2) {
	            continue;
	        }           
	        params[pair[0]] = pair[1];
	    }

	    if(params.gid) {
	    	params.gid = parseInt(params.gid, 10);
	    }

	    if(!params.hasOwnProperty('pid')) {
	        return params;
	    }
	    params.pid = parseInt(params.pid, 10);
	    return params;
	};

	var openPhotoSwipe = function(index, galleryElement, disableAnimation) {
	    var pswpElement = document.querySelectorAll('.pswp')[0],
	        gallery,
	        options,
	        items;

		items = parseThumbnailElements(galleryElement);

	    // define options (if needed)
	    options = {
	        index: index,

			// define gallery index (for URL)
	        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

	        getThumbBoundsFn: function(index) {
	            // See Options -> getThumbBoundsFn section of docs for more info
	            var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
	                pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
	                rect = thumbnail.getBoundingClientRect(); 

	            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
	        },

	        // history & focus options are disabled on CodePen
           	// remove these lines in real life: 
		   history: false,
		   focus: false	

	    };

	    if(disableAnimation) {
	        options.showAnimationDuration = 0;
	    }

	    // Pass data to PhotoSwipe and initialize it
	    gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
	    gallery.init();
	};

	// loop through all gallery elements and bind events
	var galleryElements = document.querySelectorAll( gallerySelector );

	for(var i = 0, l = galleryElements.length; i < l; i++) {
		galleryElements[i].setAttribute('data-pswp-uid', i+1);
		galleryElements[i].onclick = onThumbnailsClick;
	}

	// Parse URL and open gallery if it contains #&pid=3&gid=1
	var hashData = photoswipeParseHash();
	if(hashData.pid > 0 && hashData.gid > 0) {
		openPhotoSwipe( hashData.pid - 1 ,  galleryElements[ hashData.gid - 1 ], true );
	}
};

// execute above function
initPhotoSwipeFromDOM('.my-simple-gallery');</script>
   
   
    <script src="js/jquery-2.1.0.min.js"></script>
        <script src="js/main3.js"></script>
   
   
    </body>
</html>