/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package bibliotecanacional;

import java.util.ArrayList;
import java.util.Scanner;
import static java.util.stream.DoubleStream.concat;

/**
 *
 * @author pc
 */
public class Libro {

    private String nombreLibro, isbn, autoresPrint, titulo, categoria, año, editorial, edicion;
    private int estante, posestante, cantidad;
    private static ArrayList<String> autores = new ArrayList();

    public String getNombreLibro() {
        return nombreLibro;
    }

    public void setNombreLibro(String nombreLibro) {
        this.nombreLibro = nombreLibro;
    }

    public String getIsbn() {
        return isbn;
    }

    public void setIsbn(String isbn) {
        this.isbn = isbn;
    }

    public String getAutor() {
        return autoresPrint;
    }

    public void setAutor(String autor) {
        this.autoresPrint = autor;
    }

    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    public String getAño() {
        return año;
    }

    public void setAño(String año) {
        this.año = año;
    }

    public String getEditorial() {
        return editorial;
    }

    public void setEditorial(String editorial) {
        this.editorial = editorial;
    }

    public String getEdicion() {
        return edicion;
    }

    public void setEdicion(String edicion) {
        this.edicion = edicion;
    }

    public int getEstante() {
        return estante;
    }

    public void setEstante(int estante) {
        this.estante = estante;
    }

    public int getPosestante() {
        return posestante;
    }

    public void setPosestante(int posestante) {
        this.posestante = posestante;
    }

    public int getCantidad() {
        return cantidad;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    public Libro() {
    }

    @Override
    public String toString() {

        return "\nTitulo del libro: " + titulo + "\n" + "ISBN: " + isbn + "\n" + "Autor/Autores: " + autoresPrint
                + "Categoria tematica del Libro: " + categoria + "\n" + "Año de publicacion: " + año + "\n" + "Editorial: " + editorial + "\n" + "Numero de edicion: " + edicion + "\n" + "Estante numero: "
                + estante + "\n" + "Posiciion en el estante: " + posestante + "\n";

    }

    public static ArrayList<String> getAutores() {
        return autores;
    }

    public static void setAutores(ArrayList<String> autores) {
        Libro.autores = autores;
    }

    public void agregaAutor() {
        Scanner entrada2 = new Scanner(System.in);
        Scanner entrada = new Scanner(System.in);
        String concatenar = "\n", autor;
        int nAutores;
        System.out.println("Cuantos autores tiene su libro?");
        nAutores = entrada2.nextInt();
        for (int i = 1; i <= nAutores; i++) {

            System.out.println("Ingrese el autor " + i);
            autor = entrada.nextLine();
            concatenar += "Autor " + i + ": " + autor + "\n";

        }

        this.autoresPrint = concatenar;
    }

}

/*libros.get(0).getCantidad();*/
