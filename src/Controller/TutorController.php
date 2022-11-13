<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tutor Controller
 *
 * @property \App\Model\Table\TutorTable $Tutor
 * @method \App\Model\Entity\Tutor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TutorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tutor = $this->paginate($this->Tutor);

        $this->set(compact('tutor'));
    }

    /**
     * View method
     *
     * @param string|null $id Tutor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tutor = $this->Tutor->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tutor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tutor = $this->Tutor->newEmptyEntity();
        if ($this->request->is('post')) {
            $tutor = $this->Tutor->patchEntity($tutor, $this->request->getData());
            if ($this->Tutor->save($tutor)) {
                $this->Flash->success(__('Se ha guardado el tutor'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido guardar el tutor. Por favor vuelve a intentarlo'));
        }
        $this->set(compact('tutor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tutor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tutor = $this->Tutor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tutor = $this->Tutor->patchEntity($tutor, $this->request->getData());
            if ($this->Tutor->save($tutor)) {
                $this->Flash->success(__('Se ha actualizado el tutor'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido actualizar el tutor. Por favor vuelve a intentarlo'));
        }
        $this->set(compact('tutor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tutor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tutor = $this->Tutor->get($id);
        if ($this->Tutor->delete($tutor)) {
            $this->Flash->success(__('Se ha eliminado el tutor'));
        } else {
            $this->Flash->error(__('No se ha podido eliminar el tutor. Por favor vuelve a intentarlo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
