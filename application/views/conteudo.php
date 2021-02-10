<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
       <h1 class="h2">Cursos</h1>
       
       <a href="Jobim/Adicionar" class="btn">incluir</a>

       <div class="row">
              
              <table class="table">

              <tr>
                     <td>ID</td>
                     <td>TITULO</td>
                     <td>DECRICAO</td>
              </tr>

             	<?php
       		$count = 0;
       		foreach ($cursos as $curso) {
                            echo '<tr>';
       			echo '<td>'.$curso -> ID.'</td>';
                            echo '<td>'.$curso -> TITULO.'</td>';
                            echo '<td>'.$curso -> DESCRICAO.'</td>';
                            echo '</tr>';
        		$count++;
       		}
       	?>
              </table>
       </div>
       
</main>
