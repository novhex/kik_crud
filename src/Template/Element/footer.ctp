<button type="button" id="btnTest"> Test AJAX</button>
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Your Website 2015</p>
        </div>
    </div>
</footer>

<script>
		$(document).ready(function(){
				 
				 $("#btnTest").click(function(){
				 	$.ajax({
				 		url: 'teste/ajaxtest',
				 		type: 'POST',
				 		success:function(res){
				 				console.log(res);
				 		}
				 	});
				 });
		});
</script>