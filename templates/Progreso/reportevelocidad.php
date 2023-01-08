<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Progreso> $progreso
 * 
 */
?>
<?php
$identificador=$_GET["velocidadMinima"];
$velocidadArreglo = array(
    "1"  => "0",
    "2"  => "0",
    "3"  => "0",
    "4"  => "0",
    "5"  => "0",
    "6"  => "0",
    "7"  => "0",
    "8"  => "0",
    "9"  => "0",
    "10"  => "0",
    "11"  => "0",
    "12"  => "0",

);
$NivelActual = 0;
$Puntaje = 0;
$fechaI = null;
$PuntajeBase = 0;
$PuntajeComparar = 0;
$VelocidadAscenso = 0;
$IncrementoAgilidad = 0;
$SoftSkills=0;
$days=0;
$i=0;
$PuntosRecorridos=0;
$identifyStudent;
?>



<br>
<div class="progreso index content">
    <h3><?= __('Reporte Velocidad de ascenso') ?></h3>
    <div class="table-responsive">
        <table>
            <tbody>
                <?php foreach ($progreso as $progreso ): ?>
                    
                        <tr>
                        
                            <?php
                            $identifyStudent=$progreso->idEstudiante;
                            ?>
                        </td>
                        
                            <?php if ($progreso->idNivelAlcanzado>$NivelActual){
                                if($NivelActual!=0){
                                    $PuntajeComparar=100;
                                }
                                $NivelActual=$progreso->idNivelAlcanzado;
                                $Puntaje=0;

                            }
                            ?>
                            
                                <?php
                                    if($fechaI==null){
                                        $fechaI = $progreso->fecha;
                                        $PuntoInicio=$progreso->puntajeActual;
                                        $PuntajeBase = $progreso->puntajeActual;
                                    } else {
                                        if ($fechaI==$progreso->fecha){
                                            $days=1;
                                        }else{
                                            $days=$progreso->fecha->diff($fechaI);
                            
                                        }
                                        $PuntajeComparar=$PuntajeComparar+$progreso->puntajeActual;
                                        $PuntosRecorridos=$PuntosRecorridos+$PuntajeComparar;
                                        $calc = abs($PuntajeComparar-$PuntajeBase)/$days->days;
                                        
                                        $VelocidadAscenso = $VelocidadAscenso+$calc;

                                        $velocidadArreglo["$identifyStudent"]=$velocidadArreglo["$identifyStudent"]+$VelocidadAscenso;
                                        
                                        $i=$i+1;
                                        $PuntajeBase=$progreso->puntajeActual;
                                        $PuntajeComparar=0;
                                    }
                                ?>

                                
                            
                            
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>
<br>
<br>

<?php if($fechaI!=null):?>
<div class="row">
    <div class="column-responsive column-100">
        <div class="progreso view content">
            <h3><?php echo "Estudiantes con velocidad sobre $identificador puntos de ascenso diarios";?></h3>
            <table>
                <tr>
                    <th><?= __('Reporte') ?>
                    
                </th>
                    <td>
                    <?php
                    $t=1;
                    ?>
                    <?php foreach($velocidadArreglo as $elemento): ?>
                        
                           <?php if(!empty($elemento) && ($elemento>=$identificador)): ?>
                                <?php echo "Id Estudiante: $t";?>
                                <br>
                                <?php 
                                    $elemento=round($elemento,2);
                                    echo "Velocidad de ascenso: $elemento";
                                ?>
                                <br>
                                <?php
                                    if($VelocidadAscenso>10){
                                        echo "Gestión de tiempo: Excelente";
                                        
                                    }else if($Porcentaje>8){
                                        echo "Gestión de tiempo: Bueno";
                                        
                                    }else if($Porcentaje>5){
                                        echo "Gestión de tiempo: Inicial";
                                    }else{
                                        echo "Gestión de tiempo: Puede mejorar";
                                    }
                                    
                                ?>
                                <br>
                                <?= $this->Html->link(__('Ver Estudiante'), ['controller' => 'Estudiante','action' => 'view', $t]) ?>
                                <br>
                                <br>
                            <?php endif; ?>
                            <?php $t=$t+1;?>
                           
                           
                           <?php endforeach; ?>
                    </td>
                    
                </tr>
                
            </table>
        </div>
    </div>
</div>
<?php endif; ?>