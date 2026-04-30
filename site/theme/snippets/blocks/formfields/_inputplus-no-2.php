<h1>This is the input Plus Field</h1>

<input type="text" id="member" name="member" value="">Number of members: (max. 10)<br />
<a href="#" id="filldetails" onclick="addFields()">Fill Details</a>
<div id="<?= $formfield->id() ?>"></div>



<script>

function addFields(){
  var number = document.getElementById("member").value;
  var container = document.getElementById("<?= $formfield->id() ?>");
  while (container.hasChildNodes()) {
      container.removeChild(container.lastChild);
  }
  for (i=0;i<number;i++){
      container.appendChild(document.createTextNode("Member " + (i+1)));
      var input = document.createElement("input");
      input.setAttribute("class", "formfield__input uk-input");
      input.setAttribute("type", "<?= $formfield->inputtype() ?>");
	    input.setAttribute("name", "<?= $formfield->slug() ?>" + (i+1));
      container.appendChild(input);
      container.appendChild(document.createElement("br"));
  }
}
</script>
