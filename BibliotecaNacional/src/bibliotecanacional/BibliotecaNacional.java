/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package bibliotecanacional;

import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.PrintStream;
import java.util.ArrayList;
import java.util.Scanner;

/**
 *
 * @author pc
 */
public class BibliotecaNacional {

    static Scanner entrada = new Scanner(System.in);

    static Scanner entrada2 = new Scanner(System.in);

    static ArrayList<Libro> libros = new ArrayList();

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws FileNotFoundException {
        // TODO code application logic here
        boolean salir = false;
        int opcion;

        do {
            menuPrint();
            opcion = entrada2.nextInt();
            switch (opcion) {
                case 1 -> {
                    registro();
                }
                case 2 -> {
                    buscarISBN();
                }
                case 3 -> {
                    buscarTitulo();
                }
                case 4 -> {
                    buscarCategoria();
                }
                case 5 -> {
                    eliminarISBN();
                }
                case 6 -> {
                    eliminarTitulo();
                }
                case 7 -> {
                    mostrarLibros();
                }
                case 8 -> {
                    infoText();
                }
                case 9 -> {
                    salir = true;
                }
            }
        } while (!salir);

    }

    //Funcion para añadir un nuevo libro
    public static void registro() {

        String isbn, autor, titulo, categoria, año, edicion, editorial;
        int estante, posestante, cantidad, nAutores;

        // declaramos el objeto auxiliar para almacenar un nuevo objeto 
        Libro aux;
        aux = new Libro();

        //Solicitamos los datos al usuario
        System.out.println("Ingrese Titulo del Libro");
        titulo = entrada.nextLine();
        System.out.println("Ingrese ISBN ");
        isbn = entrada.nextLine();
        aux.agregaAutor();
        System.out.println("Ingrese Categoria del libro ");
        categoria = entrada.nextLine();
        System.out.println("Ingrese Año de publicacion");
        año = entrada.nextLine();
        System.out.println("Ingrese Edicion del Libro ");
        edicion = entrada.nextLine();
        System.out.println("Ingrese Editorial del libro");
        editorial = entrada.nextLine();
        System.out.println("Ingrese numero de Estante");
        estante = entrada2.nextInt();
        System.out.println("Posicion Estante");
        posestante = entrada2.nextInt();

        //metodos set para establecer los valores de los atributos
        aux.setIsbn(isbn);
        aux.setTitulo(titulo);
        aux.setCategoria(categoria);
        aux.setAño(año);
        aux.setEdicion(edicion);
        aux.setEditorial(editorial);
        aux.setEstante(estante);
        aux.setPosestante(posestante);

        libros.add(aux);

        //Mensaje de informacion al usuario
        for (int i = 0; i < libros.size(); i++) {
            if (libros.get(i).getTitulo().equalsIgnoreCase(titulo)) {
                System.out.println("El libro " + libros.get(i).getTitulo() + "Ha sido agregado con exito");
            }
        }

    }

    public static void menuPrint() {
        System.out.println("\n****MENU****");
        System.out.println("1)Ingresar nuevo libro");
        System.out.println("2)Buscar libro por código ISBN");
        System.out.println("3)Buscar libro por título del libro");
        System.out.println("4)Buscar libros por categoría temática deseada");
        System.out.println("5)Eliminar libro por código ISBN");
        System.out.println("6)Eliminar libro por título del libro");
        System.out.println("7)Imprimir la información de todos libros");
        System.out.println("8)Guardar información de libros en archivo de texto");
        System.out.println("9)Salir");
    }

    //Metodo que nos imprime el valor de todos los objetos de tipo libro en el Array List
    public static void mostrarLibros() {
        for (int i = 0; i < libros.size(); i++) {
            System.out.println(libros.get((i)));
        }
    }

    public static void buscarISBN() {
        String isbn;
        System.out.println("Ingrese el codigo ISBN de su libro");
        isbn = entrada.nextLine();
        System.out.println("Su libro es: ");
        for (int i = 0; i < libros.size(); i++) {
            if (libros.get(i).getIsbn().equals(isbn)) {
                System.out.println(libros.get(i).toString());
            }
        }
    }

    public static void buscarTitulo() {
        String titulo;
        System.out.println("Ingrese el titulo de su libro");
        titulo = entrada.nextLine();
        System.out.println("Su libro es: ");
        for (int i = 0; i < libros.size(); i++) {
            if (libros.get(i).getTitulo().equalsIgnoreCase(titulo)) {
                System.out.println(libros.get(i).toString());
            }
        }
    }

    public static void buscarCategoria() {
        String categoria;
        System.out.println("Ingrese la categoria deseada");
        categoria = entrada.nextLine();
        System.out.println("El libro es: ");
        for (int i = 0; i < libros.size(); i++) {
            if (libros.get(i).getCategoria().equalsIgnoreCase(categoria)) {
                System.out.println(libros.get(i).toString());
            }
        }
    }

    public static void eliminarISBN() {
        String isbn;
        System.out.println("Ingrese el codigo ISBN de su libro para elimanrlo");
        isbn = entrada.nextLine();
        for (int i = 0; i < libros.size(); i++) {
            if (libros.get(i).getIsbn().equals(isbn)) {
                System.out.println("El libro" + libros.get(i).getTitulo() + "ha sido removido");
                libros.remove(i);

            }
        }
    }

    public static void eliminarTitulo() {
        String titulo;
        System.out.println("Ingrese el titulo de su libro para eliminarlo");
        titulo = entrada.nextLine();
        System.out.println("Su libro es: ");
        for (int i = 0; i < libros.size(); i++) {
            if (libros.get(i).getTitulo().equalsIgnoreCase(titulo)) {
                System.out.println("El libro: " + libros.get(i).getTitulo() + "ha sido removido");
                libros.remove(i);
            }
        }
    }

    public static void infoText() throws FileNotFoundException {
        String archivo;
        System.out.println("Nombre el archivo de texto que desea guardar");
        archivo = entrada.nextLine();
        archivo = archivo + (".txt");
        FileOutputStream os = new FileOutputStream(archivo);
        PrintStream ps = new PrintStream(os);
        for (int i = 0; i < libros.size(); i++) {
            ps.println(libros.get(i).toString());
        }
        System.out.println("Se guardo la informacion de todos los libros de la biblioteca en la carpeta principal del proyecto");
        System.out.println("El nombre del archivo es: " + archivo);
    }

}
