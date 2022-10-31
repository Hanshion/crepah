const list = document.querySelector('.list'),
      items = document querySelectorAll('.flight')

function filter(){
	list.addEventListener('click', function(event) {
		const targetId = event.target.dataset.target.id
		console.log(targetId);
	})
}
filter()