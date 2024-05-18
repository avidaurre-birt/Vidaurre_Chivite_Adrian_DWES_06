package birt.dwes.apirest.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import java.util.List;
import birt.dwes.apirest.entity.Trail;
import birt.dwes.apirest.service.ServicioTrail;

@RestController
@RequestMapping("/api/trails")
public class TrailController {

    @Autowired
    private ServicioTrail servicioTrail;

    @GetMapping
    public List<Trail> getAllTrails() {
        return servicioTrail.findAll();
    }
}