let radiolist = document.querySelectorAll('.radio')
let counter = 0;
setInterval(function(){
	radiolist[counter].checked = true;
	if (counter === 3)
	{
		counter = 0;
	}		
	else 
	{
		counter++;
	}

}, 2500);

document.querySelectorAll('.order').forEach(function(element) {
	element.addEventListener('click', function() {
		let parent = element.parentElement;
		let quantity = parent.children[0].value;
		let name = parent.children[1].value;
		let price = parent.children[2].value;
		let total = price * quantity;
	
	
	

		let tr = document.createElement('tr');
		

		let tdName = document.createElement('td');
		tdName.textContent = name;

		let tdPrice = document.createElement('td');
		tdPrice.textContent = price;

		let tdQuantity = document.createElement('td');
		tdQuantity.textContent = quantity;

		let tdTotal = document.createElement('td');
		tdTotal.textContent = total;
		
		let tdRemove = document.createElement('td');
		tdRemove.innerHTML = '<a><span class="text-danger">Remove</span></a>';

		tr.append(tdName);
		tr.append(tdPrice);
		tr.append(tdQuantity);
		tr.append(tdTotal);
		tr.append(tdRemove);		

		console.log(tr);

		let table = document.getElementById('table');
		console.log(table);
	
		table.append(tr);	

		let danger = document.querySelectorAll('.text-danger');
		

		danger.forEa((element) => {
			element.addEventListener('click', function() {

    			
    			$('.text-danger').click(function(){
					$('td').remove();
					console.log(element);

  



             });
			

			});
		});
	});
});