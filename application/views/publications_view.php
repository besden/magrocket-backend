<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
  
	<!-- Begin Main Content -->
    <div class="content">
        
		<div class="header">
		 	<h1 class="page-title">Publications</h1>
		</div>
		        
      <ul class="breadcrumb">
         <li><a href="/">Home</a> <span class="divider">/</span></li>
         <li class="active">Publications</li>
      </ul>
		
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="row-fluid">
			    <div class="alert alert-info">
			        <button type="button" class="close" data-dismiss="alert">×</button>
			        To create a new Publication definition (new Newsstand iOS application), click on the <strong>New Publication</strong> button.
			    </div>
				<div class="btn-toolbar">
				    <a href="/publicationsedit/add"><button class="btn btn-primary"><i class="icon-plus"></i> New Publication</button></a>
				  <div class="btn-group">
				  </div>
				</div>
				<div class="well">
					<?php echo $publications_table ?>
				</div>			
			</div>
					
			<script type="text/javascript">
			$(document).ready(function() {
				$('a[data-confirm]').click(function(ev) {
					var href = $(this).attr('href');
					if (!$('#dataConfirmModal').length) {
						$('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-primary" id="dataConfirmOK">OK</a></div></div>');
					} 
					$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
					$('#dataConfirmOK').attr('href', href);
					$('#dataConfirmModal').modal({show:true});
					return false;
				});
			});
			</script>


	<!-- End Main Content -->

<?php include('footer.php'); ?>