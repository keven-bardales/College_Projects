/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package gestionaeropuertaria;

import java.util.ArrayList;

/**
 *
 * @author pc
 */
public class Aeropuerto {
    String nombre, ciudad, pais;
    private int tipoAeropuerto;
    private double subvencion;
    private String[] listaEmpresas;
    
    private ArrayList<Aerolinea> aerolineas = new ArrayList<Aerolinea>();

    public Aeropuerto(String nombre, String ciudad, String pais, int tipoAeropuerto) {
        this.nombre = nombre;
        this.ciudad = ciudad;
        this.pais = pais;
        this.tipoAeropuerto = tipoAeropuerto;
        this.subvencion = subvencion;
        this.listaEmpresas = listaEmpresas;
    }
    
    
    

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getCiudad() {
        return ciudad;
    }

    public void setCiudad(String ciudad) {
        this.ciudad = ciudad;
    }

    public String getPais() {
        return pais;
    }

    public void setPais(String pais) {
        this.pais = pais;
    }

    public int getTipoAeropuerto() {
        return tipoAeropuerto;
    }

    public void setTipoAeropuerto(int tipoAeropuerto) {
        this.tipoAeropuerto = tipoAeropuerto;
    }

    public ArrayList<Aerolinea> getAerolineas() {
        return aerolineas;
    }

    public void setAerolineas(ArrayList<Aerolinea> aerolineas) {
        this.aerolineas = aerolineas;
    }

    

   

    public double getSubvencion() {
        return subvencion;
    }

    public void setSubvencion(double subvencion) {
        this.subvencion = subvencion;
    }

    public String[] getListaEmpresas() {
        return listaEmpresas;
    }

    public void setListaEmpresas(String[] listaEmpresas) {
        this.listaEmpresas = listaEmpresas;
    }
    
    public void addAerolinea(Aerolinea aerolinea){
        aerolineas.add(aerolinea);
    }
    
    public String mostrarInfo(){
        
        return "\nNombre Aeropuerto: " + nombre + "\nCiudad: " + ciudad + "\nPais: " + pais;
    }
    
    public void printListaEmpresas(){
         System.out.println("\nLista de Empresas del Aeropuerto privado " + nombre);
        for(int i = 0; i < listaEmpresas.length; i++){
            System.out.println((i+1) + "). " + listaEmpresas[i]);
        }
    }
    
    public void printSubvencionPublico(){
        System.out.println("Aeropuerto Publico " + nombre);
        System.out.println("Subvencion Gubernamental: " + subvencion);
    }
    
    public void printAerolineas(){
        System.out.println("\nLista de Aerolineas del Aeropuerto " + nombre);
        for(int i = 0; i < aerolineas.size(); i ++){
            System.out.println((i+1) + "). " + aerolineas.get(i).getNombre());
        }
        
    }
    
    
        public void printVuelosAerolineas(int posicionAerolinea){
            aerolineas.get(posicionAerolinea).imprimeVuelos();
            
        }
        
        public int retornaPosFinalAerolinea(){
           
            return aerolineas.size() - 1;
        }
    
    
    
}
