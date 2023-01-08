<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Progreso> $progreso
 * 
 */
?>
<?php
$identificador=$_GET["idEstudiante"];
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
?>



<br>
<div class="progreso index content">
    <?= $this->Html->link(__('Nuevo Progreso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Progreso') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id Nivel Alcanzado') ?></th>
                    <th><?= $this->Paginator->sort('Fecha') ?></th>
                    <th><?= $this->Paginator->sort('Puntaje Actual') ?></th>
                    <th><?= $this->Paginator->sort('id Estudiante') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($progreso as $progreso ): ?>
                    <?php if ($progreso->idEstudiante==$identificador): ?>
                        <tr>
                            <td><?= $this->Number->format($progreso->idNivelAlcanzado) ?></td>
                            <?php if ($progreso->idNivelAlcanzado>$NivelActual){
                                if($NivelActual!=0){
                                    $PuntajeComparar=100;
                                }
                                $NivelActual=$progreso->idNivelAlcanzado;
                                $Puntaje=0;

                            }
                            ?>
                            <td><?= h($progreso->fecha) ?>
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
                                        $i=$i+1;
                                        $PuntajeBase=$progreso->puntajeActual;
                                        $PuntajeComparar=0;
                                    }

                                    


                                ?>
                        </td>
                            <td><?= $this->Number->format($progreso->puntajeActual) ?>
                                <?php if ($progreso->puntajeActual>$Puntaje): ?>
                                    <?php 
                                    $Puntaje=$progreso->puntajeActual;
                                    ?>
                                <?php endif; ?>
                            </td>
                            <td><?= $this->Number->format($progreso->idEstudiante) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver Estudiante'), ['controller' => 'Estudiante','action' => 'view', $progreso->idEstudiante]) ?>
                                
                            </td>
                        </tr>
                <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('previo')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('final') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?></p>
    </div>
</div>
<br>
<br>

<?php if($fechaI!=null):?>
<div class="row">
    <div class="column-responsive column-100">
        <div class="progreso view content">
            <h3><?= h('CORE PITAGORAS') ?></h3>
            <table>
                <tr>
                    <th><?= __('Nivel actual') ?></th>
                    <td>
                        <?php
                        switch ($NivelActual) {
                            case 1:
                                echo "Básico";
                                break;
                            case 4:
                                echo "Intermedio I";
                                break;
                            case 5:
                                echo "Intermedio II";
                                break;
                            case 6:
                                echo "Intermedio III";
                                break;
                            case 7:
                                echo "Avanzado I";
                                break;
                            case 8:
                                echo "Avanzado II";
                                break;
                        }
                        
                        ?>
                    </td>
                    
                </tr>
                <tr>
                    <th><?= __('Puntaje actual del nivel') ?></th>
                    <td>
                        <?php
                        echo $Puntaje;
                        ?>
                    </td>
                    
                </tr>
                <tr>
                    <th><?= __('Velocidad de ascenso') ?></th>
                    <td>
                        <?php
                        if($i==0){
                            $i=1;
                        }
                        $VelocidadAscenso=$VelocidadAscenso/$i;
                        $VelocidadAscenso=round($VelocidadAscenso,2);
                        echo "En promedio se asciende a $VelocidadAscenso puntos de aprendizaje diarios"
                        ?>
                    </td>
                    
                </tr>
                <tr>
                    <th><?= __('Incremento de agilidad') ?></th>
                    <td>
                        <?php
                        $IncrementoAgilidad=$PuntosRecorridos-$PuntoInicio;
                        $Porcentaje=$PuntosRecorridos/6;
                        echo "Haz incrementado $IncrementoAgilidad puntos de aprendizaje, $Porcentaje% del aprendizaje total de la ciencia matemática en Pitágoras";
                        ?>
                    </td>
                    
                </tr>
                <tr>
                    <th><?= __('Soft Skills Alcanzadas') ?></th>
                    <td>
                        <?php
                        if($IncrementoAgilidad>500){
                            echo "Solucionar problemas: Excelente";
                            
                        }else if($IncrementoAgilidad>300){
                            echo "Solucionar problemas: Bueno";
                            
                        }else if($IncrementoAgilidad>100){
                            echo "Solucionar problemas: Inicial";
                        }else{
                            echo "Solucionar problemas: Puede mejorar";
                        }
                        
                        ?>
                        <br>
                        <?php
                        if($Porcentaje>80){
                            echo "Adaptabilidad: Excelente";
                            
                        }else if($Porcentaje>50){
                            echo "Adaptabilidad: Bueno";
                            
                        }else if($Porcentaje>25){
                            echo "Adaptabilidad: Inicial";
                        }else{
                            echo "Adaptabilidad: Puede mejorar";
                        }
                        
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
                    </td>
                    

                    
                </tr>
            </table>
        </div>
    </div>
</div>
<?php endif; ?>