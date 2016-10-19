  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- WYSIWIG TEXT EDITOR FOR ADMIN -->
    
    <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script> tinymce.init({ selector:'textarea', theme: 'modern' }); </script>
    
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Views',     <?php echo $session->count; ?>],
          ['Comments',      <?php echo Comment::count_all(); ?>],
          ['Users',  <?php echo User::count_all(); ?>],
          ['Photos', <?php echo Photo::count_all(); ?>],
        ]);

        var options = {
          title: 'Website Statistics',
          is3D: true,
          legend: 'none',
          pieSliceText: 'label',
          backgroundColor: 'transparent',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    

</body>

</html>
