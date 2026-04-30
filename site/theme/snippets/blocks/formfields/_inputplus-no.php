<style>

.notes{
	padding: 20px;
}

.notes p{
	border-bottom: thin dotted #d4d4d4;
	padding: 20px 10px 0px 0px;
	font-style: italic;
	font-size: 18px;
}

.notes p span{
	font-size: 16px;
	float:  right;
	cursor: pointer;
	display: inline-block;
}
.notes p span.mark{
	color: green;
	font-size: 30px;
	transform: translateY(-10px);
}

form{
	width:  100%;
}

.field{
	margin-bottom: 10px;
	display: flex;
	transition: opacity 0.3s;
}

.field input{
	padding: 5px 10px;
	width: 100%;
	border: none;
	 border: thin solid #d4d4d4; 
	font-size: 20px;
	color: #888;
	font-family: ubuntu, sans-serif;
	background-color: #f9f9f9;
}
.field input:focus{
	outline: none;
}

.field span{
	display: inline-block;
	margin-left: 10px;
	cursor: pointer;
	background-color: #f9f9f9;
	padding: 10px;
	font-size: 20px;
	transition: all 0.3s;
	font-weight: bold;
	border: thin solid #d4d4d4; 
}
.field span:last-child{
	display: none;
	padding: 12px;
}
.field span:hover{
	background-color: green;
	border: thin solid green;
	color: #fff;
}
.field span:last-child:hover{
	background-color: red;
	border: thin solid red;
	color: #fff;
}


button{
	display: block;
	padding: 10px 20px;
	margin-top: 30px;
	width:  150px;
	float: left;
	font-size: 16px;
	background-color: #5b8ebf;
	border: thin solid #d5e4d4;
	cursor: pointer;
	color: #fff;
}

button:active{
	background-color: #aedea6;
	color: #000;
}

.reset{
	float: right;
	background-color: green;
}
</style>
<h1>This is the input Plus Field</h1>


	<div class="notes">
		<!-- content created by javascript -->
	</div>

	<form  action="" method="post" autocomplete="off">

    <div id="parentDiv">

		<div class="field">
			<input type="text" name="notes[]">
			<span onclick="addField(this)">+</span>
			<span onclick="removeField(this)">-</span>
		</div>

		<button type="submit" >Display Notes</button>
		<button class="reset" onclick="location.reload()">Reset App</button>

	</form>
</div>

<script>

        

  function addField(plusElement){

	let displayButton = document.querySelector("form button");
    // The Parent must be there
  let parentDiv = document.getElementById("parentDiv"); 


	// Stopping the function if the input field has no value.
	if(plusElement.previousElementSibling.value.trim() === ""){
		return false;
	}

	// creating the div container.
	let div = document.createElement("div");
	div.setAttribute("class", "field");

	// Creating the input element.
	let field = document.createElement("input");
	field.setAttribute("type", "text");
	field.setAttribute("name", "notes[]");

	// Creating the plus span element.
	let plus = document.createElement("span");
	plus.setAttribute("onclick", "addField(this)");
	let plusText = document.createTextNode("+");
	plus.appendChild(plusText);

	// Creating the minus span element.
	let minus = document.createElement("span");
	minus.setAttribute("onclick", "removeField(this)");
	let minusText = document.createTextNode("-");
	minus.appendChild(minusText);

	// Adding the elements to the DOM.
	parentDiv.insertBefore(div, displayButton);
	div.appendChild(field);
	div.appendChild(plus);
	div.appendChild(minus);

	// Un hiding the minus sign.
	plusElement.nextElementSibling.style.display = "block"; // the minus sign
	// Hiding the plus sign.
	plusElement.style.display = "none"; // the plus sign
}

function removeField(minusElement){
   minusElement.parentElement.remove();
}

let form = document.forms[0];
form.addEventListener("submit", fetchTextNotes);
function fetchTextNotes(event){
	// prevent the form to communicate with the server.
	event.preventDefault();

	// Fetch the values from the input fields.
	let data = new FormData(form);

	// Storing the values inside an array so we can handle them.
	// we don't want empty values.
	let notes = [];
	data.forEach( function(value){
		if(value !== ""){
			notes.push(value);
		}
	});

	// Output the values on the screen.
	let out = "";
	for(let note of notes){
		out += `
			<p>${note} <span onclick="markAsDone(this)">Mark as done</span></p>
		`;
	}
	document.querySelector(".notes").innerHTML = out;

	// Delete all input elements except the last one.
	let inputFields = document.querySelectorAll(".field");
	inputFields.forEach(function(element, index){
		if(index == inputFields.length - 1){
			element.children[0].value = "";
		}else{
			element.remove();
		}
	});
}

function markAsDone(element){
	element.classList.add("mark");
	element.innerHTML = "&check;";
}
</script>
