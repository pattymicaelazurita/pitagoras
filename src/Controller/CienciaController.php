<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ciencia Controller
 *
 * @property \App\Model\Table\CienciaTable $Ciencia
 * @method \App\Model\Entity\Ciencium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CienciaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ciencia = $this->paginate($this->Ciencia);

        $this->set(compact('ciencia'));
    }

    /**
     * View method
     *
     * @param string|null $id Ciencium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ciencium = $this->Ciencia->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ciencium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ciencium = $this->Ciencia->newEmptyEntity();
        if ($this->request->is('post')) {
            $ciencium = $this->Ciencia->patchEntity($ciencium, $this->request->getData());
            if ($this->Ciencia->save($ciencium)) {
                $this->Flash->success(__('Se ha guardado la ciencia'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La ciencia no se ha guardado. Por favor vuelvalo a intentar'));
        }
        $this->set(compact('ciencium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ciencium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ciencium = $this->Ciencia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ciencium = $this->Ciencia->patchEntity($ciencium, $this->request->getData());
            if ($this->Ciencia->save($ciencium)) {
                $this->Flash->success(__('Se ha actualizado la ciencia'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La ciencia no se ha actualizado. Por favor vuelvalo a intentar'));
        }
        $this->set(compact('ciencium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ciencium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ciencium = $this->Ciencia->get($id);
        if ($this->Ciencia->delete($ciencium)) {
            $this->Flash->success(__('Se ha eliminado la ciencia'));
        } else {
            $this->Flash->error(__('La ciencia no se ha eliminado. Por favor vuelvalo a intentar'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
