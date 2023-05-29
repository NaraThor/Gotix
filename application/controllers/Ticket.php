<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

	public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('username')){
            $this->session->set_flashdata('pesan', '<script>alert("Harap login terlebih dahulu")</script>');
            redirect('login');
        }
    }

    public function list($id)
    {
        $data['ticket'] = $this->model_ticket->filter($id)->result();
        $data['event'] = $this->model_event->find($id)->result()[0];

        $param = array(
            'event_click' => $data['event']->{"event_click"} + 1
        );
        $where = array(
            'event_id' => $data['event']->{"event_id"}
        );
        $this->model_event->update($where,$param,'event');

        $this->load->view('main/ticket/ticket', $data);
    }

    public function bayar($id){
        $data['ticket'] = $this->model_ticket->find($id)->result()[0];
        $data['event'] = $this->model_event->find($data['ticket']->{"event_id"})->result()[0];
        $this->load->view('main/bayar/bayar', $data);
    }


    public function bayarAction($id){
        $ticket = $this->model_ticket->find($id)->result()[0];

        $param = array(
            'ticket_buys' => $ticket->{"ticket_buys"} + 1
        );
        $where = array(
            'ticket_id' => $ticket->{"ticket_id"}
        );
        $this->model_ticket->update($where,$param,'ticket');
        redirect('list');
    }

}
