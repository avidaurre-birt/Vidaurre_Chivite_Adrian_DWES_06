package birt.dwes.apirest.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import birt.dwes.apirest.dao.TrailDAO;
import birt.dwes.apirest.entity.Trail;


@Service
public class ServicioTrailImpl implements ServicioTrail {

	@Autowired
	private TrailDAO trailDAO;
	
	
	
	@Override
	public List<Trail> findAll() {
		
		return trailDAO.findAll();
	}



}
