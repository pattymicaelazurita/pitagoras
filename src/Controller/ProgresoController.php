<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Progreso Controller
 *
 * @property \App\Model\Table\ProgresoTable $Progreso
 * @method \App\Model\Entity\Progreso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgresoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $progreso = $this->paginate($this->Progreso);
        $this->set(compact('progreso'));
        
    }

    public function reportevelocidad()
    {
        $progreso = $this->paginate($this->Progreso);
        $this->set(compact('progreso'));
        
    }

    public function identificador()
    {
        $progreso = $this->paginate($this->Progreso);
        $this->set(compact('progreso'));
        
    }

    public function identificadorreporte()
    {
        $progreso = $this->paginate($this->Progreso);
        $this->set(compact('progreso'));
        
    }

    public function core($id=2)
    {
        $progreso = $this->paginate($this->Progreso);
        $this->set(compact('progreso'));
        
    }


    /**
     * View method
     *
     * @param string|null $id Progreso id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $progreso = $this->Progreso->get($id , [
            'contain' => [],
        ]);

        $this->set(compact('progreso'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $progreso = $this->Progreso->newEmptyEntity();
        if ($this->request->is('post')) {
            $progreso = $this->Progreso->patchEntity($progreso, $this->request->getData());
            if ($this->Progreso->save($progreso)) {
                $this->Flash->success(__('Se ha guardado el progreso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido guardar el progreso. Por favor vuelva a intentarlo'));
        }
        $this->set(compact('progreso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Progreso id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $progreso = $this->Progreso->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $progreso = $this->Progreso->patchEntity($progreso, $this->request->getData());
            if ($this->Progreso->save($progreso)) {
                $this->Flash->success(__('Se ha actualizado el progreso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido actualizar el progreso. Por favor vuelva a intentarlo'));
        }
        $this->set(compact('progreso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Progreso id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $progreso = $this->Progreso->get($id);
        if ($this->Progreso->delete($progreso)) {
            $this->Flash->success(__('Se ha eliminado el progreso'));
        } else {
            $this->Flash->error(__('No se ha podido eliminar el progreso. Por favor vuelva a intentarlo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
