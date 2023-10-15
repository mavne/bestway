<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>
	<style type="text/css">
		.g-wrapper{
			margin: 40px;
			width: 400px;
			height: 400px;
			position: relative;
		}

		.g-wrapper img{
			margin: 0;
			padding: 0;
			border: 0;
			width: 400px;
			height: 400px;
		}

		.g-square {
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    width: 0;
		    height: 0;
		    background-color: rgba(255, 0, 0, 0.5);
		    transition: width 0.3s ease, height 0.3s ease;
		    pointer-events: none;
		    z-index:100;
		}

		.g-preview{
			margin: 0;
			padding: 0;
			border: 0;
			width: 400px;
			height: 400px;
			position: absolute;
			top: 0;
			right: -420px;
			z-index: 1000;
			display: none;
			overflow: hidden;
		}

		.g-preview img{
			margin: 0;
			padding: 0;
			border: 0;
			width: 800px;
			height: 800px;
			position: absolute;
			top: 0;
			left: 0;
		}
	</style>
</head>
<body>

<div class="g-wrapper">
	<img src="/400x400.jpg" data-magnified="/800x800.jpg" alt="">
	<div class="g-square"></div>
	<div class="g-preview"></div>
</div>

<script>
	const container = document.querySelector('.g-wrapper');
	const img = document.querySelector('.g-wrapper img');
	const imgSrc = img.getAttribute('data-magnified');
	const square = document.querySelector('.g-square');
	const preview = document.querySelector('.g-preview');
	const imgMagnified = document.createElement('img');
	imgMagnified.src = imgSrc;

	container.addEventListener('mousemove', (e) => {
    	const x = e.clientX - container.getBoundingClientRect().left;
    	const y = e.clientY - container.getBoundingClientRect().top;

	    square.style.left = `${x}px`;
	    square.style.top = `${y}px`;
	    square.style.width = '200px'; // Adjust the size as needed
	    square.style.height = '200px'; // Adjust the size as needed
	    square.style.opacity = '1';



	    preview.style.display = 'block';
	    preview.appendChild(imgMagnified);

	    var prevImage = document.querySelector('.g-preview img');

	    var x100 = (parseInt(x)) * -1;
	    var y100 = (parseInt(y)) * -1;

	    prevImage.style.left = x100+'px';
	    prevImage.style.top = y100+'px';
	});

	container.addEventListener('mouseleave', () => {
	    square.style.opacity = '0';
	    preview.innerHTML = '';
	    preview.style.display = 'none';
	});
</script>

</body>
</html>