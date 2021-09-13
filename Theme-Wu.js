//声明$选择功能
let $ = document.querySelectorAll.bind(document)

//定时自动播放
let sliderTimer = setInterval(nextPlay, 6000)

const len = $('.slider ul li').length
let n = 0 /*当前初始值为第1张*/

//幻灯片翻页按钮
$('.slider .pre')[0].onclick = function() {
	clearInterval(sliderTimer)
	prePlay()
	sliderTimer = setInterval(nextPlay, 6000)
}
$('.slider .next')[0].onclick = function() {
	clearInterval(sliderTimer)
	nextPlay()
	sliderTimer = setInterval(nextPlay, 6000)
}

// 向前翻页
function prePlay() {
	if(n == 0) {
		n = len /*第一张跳至末尾*/
	}
	n--
	$('.slider ul')[0].style.left = -70 * n + 'vw'
}

// 向后翻页
function nextPlay() {
	n++
	if(n == len) {
		n = 0 /*末位回跳至第一张*/
	}
	$('.slider ul')[0].style.left = -70 * n + 'vw'
}