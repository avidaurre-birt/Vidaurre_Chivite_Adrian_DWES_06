package birt.dwes.apirest.entity;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name="trails")
public class Trail {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name="id")
    private int id;

    @Column(name="fecha")
    private String fecha;

    @Column(name="distancia_km")
    private float distanciaKm;

    @Column(name="tiempo_min")
    private int tiempoMin;

    @Column(name="desnivel_positivo_m")
    private int desnivelPositivoM;

    @Column(name="ritmo_min_km")
    private String ritmoMinKm;

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getFecha() {
		return fecha;
	}

	public void setFecha(String fecha) {
		this.fecha = fecha;
	}

	public float getDistanciaKm() {
		return distanciaKm;
	}

	public void setDistanciaKm(float distanciaKm) {
		this.distanciaKm = distanciaKm;
	}

	public int getTiempoMin() {
		return tiempoMin;
	}

	public void setTiempoMin(int tiempoMin) {
		this.tiempoMin = tiempoMin;
	}

	public int getDesnivelPositivoM() {
		return desnivelPositivoM;
	}

	public void setDesnivelPositivoM(int desnivelPositivoM) {
		this.desnivelPositivoM = desnivelPositivoM;
	}

	public String getRitmoMinKm() {
		return ritmoMinKm;
	}

	public void setRitmoMinKm(String ritmoMinKm) {
		this.ritmoMinKm = ritmoMinKm;
	}
    
    
    
}