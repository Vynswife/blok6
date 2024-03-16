<?php namespace App\Models;
use CodeIgniter\Model;


class M_polisi extends Model
{
	
	public function tampil($org)
	{
		return $this->db->table($org)->get()->getResult();
	}
	public function tambah($table,$where)
	{
		return $this->db->table($table)->insert($where);
	}
	public function hapus($kolom,$where)
	{
		return $this->db->table($kolom)->delete($where);
	}
	public function getWhere($table,$isi)
	{
		return $this->db->table($table)->getWhere($isi)->getRow();
	}
	public function edit($kin,$isi,$where)
	{
		return $this->db->table($kin)->update($isi,$where);
	}
	public function join($kin,$tabel2,$on,$where)
	{
		return $this->db->table($kin)
						->join($tabel2,$on,"left")
						->getWhere($where)->getRow();
	}
	public function tampil_join($table1,$tabel2,$on)
	{
		return $this->db->table($table1)
						->join($tabel2,$on,"left")
						->get()->getResult();
	}
	public function joinWhere($table,$tabel2,$on,$where)
	{
		return $this->db->table($tabel2)
						->join($tabel2,$on,"right")
						->getWhere($where)->getRow();
	}
	public function upload($file)
	{
		$imageName = $file->getName();
		$file->move(ROOTPATH.'public/img',$imageName);
	}
}