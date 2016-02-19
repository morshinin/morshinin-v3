<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Валидная верстка веб-сайтов</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link href='https://fonts.googleapis.com/css?family=Exo+2:400,800&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="style.css">
	
</head>
<body>				
		<div class="navbar navbar-default navbar-static">
			<div class="container">
				<div class="navbar-header">
				<a href="/" class="navbar-brand logo">
						Рефактор - верстка и интеграция
					</a>
				</div> <!-- navbar-header -->
				<ul class="navbar-right list-unstyled list-inline main-contact">
					<li>
						<i class="fa fa-phone-square"></i>							
						 +7 926 540 54 46
					</li>
					<li>
						<i class="fa fa-skype"></i>
						 a5405446
					</li>
					<li>
						<i class="fa fa-envelope"></i>
						<a href="mailto:skech@mail.ru"> skech@mail.ru</a>
					</li>
				</ul>
			</div> <!-- container -->
		</div>
	<div class="container">
		<div class="row standout">
			<div class="col-md-6 col-sm-12 col-xs-12 well well-lg ">
				<h1>Нужно сверстать сайт?</h1>
				<p class="lead">
					Предоставьте это мне!
				</p>
					<ul class="fa-ul list-unstyled">
						<li>
							<i class="fa-li fa fa-check-square"></i>
							Валидность кода 100%
						</li>
						<li>
							<i class="fa-li fa fa-check-square"></i>
							Высокая ответственность
						</li>
						<li>
							<i class="fa-li fa fa-check-square"></i>
							Демократичная цена
						</li>
							
					</ul>
				<button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#exampleModal">Заказать</button>

				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="exampleModalLabel">Заказать верстку</h4>
				      </div>
				      
				        <form role="form" method="post" action="example.php">
				        <div class="modal-body">
				          <div class="form-group">
				            <label for="recipient-name" class="control-label">Ваш e-mail:</label>
				            <input type="text" id="email" name="email" class="form-control">
				          </div>
				          <div class="form-group">
				            <label for="message-text" class="control-label">Сообщение:</label>
				            <textarea class="form-control" id="message" name="message">
				            	
				            </textarea>
				          </div>
				          </div> <!-- modal-body -->
				          <div class="modal-footer">
				            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				            <input id="submit" name="submit" type="submit" class="btn btn-primary"><!-- Отправить</button> -->
				          </div>
				        </form>
				      
				      
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<img src="img/banner3.jpg" alt="" class="img-responsive hidden-sm hidden-xs">
			</div>
		</div>
		<div class="row wow fadeInUp">
			<h2 class="text-center">
				Порядок работы
			</h2>
		</div> <!-- row -->
		<div class="row text-center features wow fadeInUp">
			<div class="col-md-4">
				<i class="glyphicon glyphicon-list-alt"></i>
				<h3>Техническое задание</h3>
				<p>
					Вместе с Заказчиком мы пишем и согласовываем техническое задание на верстку.
				</p>
			</div>
			<div class="col-md-4">
				<i class="glyphicon glyphicon-cog"></i>
				<h3>Реализация работ</h3>
				<p>
					Я провожу работы по верстке в соответствии с техническим заданием.
				</p>
			</div>
			<div class="col-md-4">
				<i class="glyphicon glyphicon-ok"></i>
				<h3>Сдача проекта</h3>
				<p>
					После завершения работы, Заказчик проверяет ее по техническому заданию.
				</p>
			</div>
		</div> <!-- row -->
		<div class="row wow fadeInUp">
			<h2 class="text-center">
				Мои работы
			</h2>
		</div> <!-- row -->
			<!-- thumbnail slider start here -->
		

			<!-- thumbnail slider end here -->
		<div class="row wow fadeInUp">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="#" data-toggle="modal" data-target="#realtModal"><img src="img/realty.jpg" alt="" class="img-thumbnail"></a>
				<!-- Modal -->
				<div class="modal fade" id="realtModal" tabindex="-1" role="dialog" aria-labelledby="realtModalLabel">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				       
				        <h4 class="modal-title" id="realtModalLabel">Пример верстки</h4>
				      </div>
				      <div class="modal-body">
				      	<iframe src="http://14.ubivaka.z8.ru/" style="zoom:0.60" width="99.6%" height="700px" frameborder="0"></iframe>
				      </div> <!-- modal-body -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				      </div>
				    </div>
				  </div>
				</div> <!-- modal-fade -->
			</div> <!-- col-md-3 col-sm-6 col-xs-6 -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="#" data-toggle="modal" data-target="#ssangModal"><img src="img/ssang.jpg" alt="" class="img-thumbnail"></a>
				<!-- Ssang Modal -->
				<div class="modal fade" id="ssangModal" tabindex="-1" role="dialog" aria-labelledby="ssangModalLabel">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				       
				        <h4 class="modal-title" id="realtModalLabel">Пример верстки</h4>
				      </div>
				      <div class="modal-body">
				      	<iframe src="http://21.ubivaka.z8.ru/" style="zoom:0.60" width="99.6%" height="700px" frameborder="0"></iframe>				    
				      </div> <!-- modal-body -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div> <!-- col-md-3 col-sm-6 col-xs-6 -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="#" data-toggle="modal" data-target="#designerModal"><img src="img/designer.jpg" alt="" class="img-thumbnail"></a>
				<!-- Designer Modal -->
				<div class="modal fade" id="designerModal" tabindex="-1" role="dialog" aria-labelledby="designerModalLabel">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				       
				        <h4 class="modal-title" id="realtModalLabel">Пример верстки</h4>
				      </div>
				      <div class="modal-body">
				      	<iframe src="http://17.ubivaka.z8.ru/" style="zoom:0.60" width="99.6%" height="700px" frameborder="0"></iframe>				        
				      </div>  <!-- modal-body -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div> <!-- col-md-3 col-sm-6 col-xs-6 -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="#" data-toggle="modal" data-target="#flatModal"><img src="img/flat.jpg" alt="" class="img-thumbnail"></a>
				<!-- Flat Modal -->
				<div class="modal fade" id="flatModal" tabindex="-1" role="dialog" aria-labelledby="flatModalLabel">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				       
				        <h4 class="modal-title" id="realtModalLabel">Пример верстки</h4>
				      </div>
				      <div class="modal-body">
				      	<iframe src="http://79265405446.ru/video/index.html" style="zoom:0.60" width="99.6%" height="700px" frameborder="0"></iframe>				        
				      </div> <!-- modal-body -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div> <!-- col-md-3 col-sm-6 col-xs-6 -->
		</div> <!-- row -->
		
		<div class="row wow fadeInUp">
			<div class="col-md-12">
				<h2 class="text-center">
					Технологии
				</h2>
			</div> <!-- col-md-12 -->
		</div> <!-- row -->
		<div class="row technology-list wow fadeInUp">
			<div class="col-md-2 col-sm-4 col-xs-6"><img src="img/ht.png" alt="" class="img-thumbnail"></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><img src="img/css.png" alt="" class="img-thumbnail"></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><img src="img/js.png" alt="" class="img-thumbnail"></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><img src="img/jq.png" alt="" class="img-thumbnail"></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><img src="img/bs.png" alt="" class="img-thumbnail"></div>
			<div class="col-md-2 col-sm-4 col-xs-6"><img src="img/wp.png" alt="" class="img-thumbnail"></div>
		</div>	<!-- row -->
		<div class="row wow fadeInUp">
			<h2 class="text-center">
				Обо мне
			</h2>
		</div> <!-- row -->
		<div class="row">
			<div class="col-md-4 col-md-offset-2 wow slideInLeft">
				<img src="img/my-photos.jpg" alt="">
			</div>
			<div class="col-md-4 wow slideInRight">
				<p>
					Меня зовут Михаил Моршинин. Я профессионально занимаюсь веб-дизайном с 2014 года. Живу в городе Мытищи московской области.
				</p>
				<p>
					Мои основные принципы в работе - это максимальная чистота, валидность кода и использование самых передовых технологий.
				</p>
				<p>
					Моя цель - создание быстрых и удобных сайтов и приложений.
				</p>
				<p>
					Помимо работы, я люблю читать, заниматься спортом, ходить в кино и театр.
				</p>
			</div>
		</div> <!-- row -->
		<div class="row wow fadeInUp">
			<h2 class="text-center">
				Свяжитесь со мной
			</h2>
		</div> <!-- row -->
		<div class="row aditional-form wow fadeInUp">
			<div class="col-md-12">
				<form action="example.php" method="post">
					<div class="col-md-4">
						<input type="text" name="email" placeholder="Ваш email" class="form-control">
					</div>
					<div class="col-md-4">
						<input type="text" name="message" placeholder="Сообщение" class="form-control">
					</div>
					<div class="col-md-4">
						<input type="submit" type="submit" class="btn btn-block btn-primary">
					</div>
				</form>
			</div> <!-- col-md-12 -->
		</div> <!-- row -->
	</div><!-- container -->
		<footer class="wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>Контактная информация</h4>
					<ul class="list-unstyled">
						<li>
							<i class="fa fa-phone-square"></i>							
							 +7 926 540 54 46
						</li>
						<li>
							<i class="fa fa-skype"></i>
							 a5405446
						</li>
						<li>
							<i class="fa fa-envelope"></i>
							<a href="mailto:skech@mail.ru"> skech@mail.ru</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4>Я в соц.сетях</h4>
					<ul class="list-unstyled">
						<li>
							<a href="https://vk.com/realkillingjoke">
								<i class="fa fa-vk fa-2x"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4>Прочие услуги</h4>
					<ul class="list-unstyled">
						<li>Создание сайтов "под-ключ"</li>
						<li>SEO-оптимизация</li>
						<li>Доработка и перенос сайтов</li>
						<li>Поддержка и администрирование сайтов</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4>
						Доп.инфо
					</h4>
					<p>
						Создано при помощи Bootstrap
					</p>
					<p>
						Рефактор &copy; 2015
					</p>
				</div>
			</div>
			</div> <!-- container -->
		</footer>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>