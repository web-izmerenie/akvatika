<?require($_SERVER['DOCUMENT_ROOT'].'/ajax/header_ajax.php');?>
<body>
  <section class="wrap production"><a href="#close" class="close"></a>
    <h1>Производство</h1>
		<video id="example_video_1" class="video-js vjs-default-skin video"
		  controls preload="none"
		  poster="<?=$tplPath;?>img/video.jpg"
		  data-setup='{"example_option":true}'>
		 <source src="/upload/video/Rolik_Akvadar_New_01.mp4" type='video/mp4' />
		 <source src="/upload/video/Rolik_Akvadar_New_01.webmsd.webm" type='video/webm' />
		 <source src="/upload/video/Rolik_Akvadar_New_01.oggtheora.ogv" type='video/ogg' />
		 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
    <div class="description">
      <div class="column">
        <h2>«Серебряная «Усть-Быстра»</h2>
        <ul>
          <li><img src="<?=$tplPath;?>img/production1.jpg"/>
            <div class="text">Вода «Серебряная» добывается в 190 км <br/>
              от города. Скважина расположена в заповедной зоне Ростовской области примерно 1,5 км
              <br/> на юго-запад от станицы Усть-Быстрянская.
            </div>
          </li>
          <li><img src="<?=$tplPath;?>img/production2.png"/>
            <div class="text">
              Вода добывается с глубины 75 метров и защищена несколькими слоями
              природных фильтров: примерно 45-ти метровым слоем песка и гальки,
              слоем синей глины, защищающей водоносный горизонт, и мергелем,
              которые очищает и смягчает воду.
            </div>
          </li>
        </ul>
      </div>
      <div class="column">
        <h2>«Горная Серебряная»</h2>
        <ul>
          <li><img src="<?=$tplPath;?>img/production3.png"/>
            <div class="text">
              Вода добывается в природной зоне в долине
              <br/> реки Аксаут из скважины №7, расположенной
              <br/> на северном склоне Главного Кавказского хребта между высокогорным курортом Домбай
              <br/> и Архызским участком Тебердинского государственного биосферного заповедника
              <br/> на Кардоникском месторождении подземных вод.
            </div>
          </li>
          <li><img src="<?=$tplPath;?>img/production4.png"/>
            <div class="text">
              Вода добывается с глубины 40 метров и защищена валунно-галечными
              отложениями, которые также являются природным фильтром.
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="advent">
      <ul>
        <li><img src="<?=$tplPath;?>img/production5.png"/>
          <div class="text">
            Минеральная
            питьевая вода проходит щадящую систему фильтрации без применения
            метода обратного осмоса. Все природные микроэлементы, в том числе
            ионы йода и серебра, сохраняются, делая воду полезной для организма.
          </div>
        </li>
        <li><img src="<?=$tplPath;?>img/production6.png"/>
          <div class="text">
            Для производства питьевой столовой воды используется автоматическая система подачи
            и розлива. Всего за 10 минут вода попадает
            из скважины в предварительно обеззараженную бутыль, поэтому она остается максимально полезной и безопасной для вас.
          </div>
        </li>
      </ul>
    </div>
  </section>
</body>
