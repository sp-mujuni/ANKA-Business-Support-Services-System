import java.io.*;

public class anka{

    //do not create an object to access main (it is static)
    public static void main(String[] args) throws IOException, FileNotFoundException {
        String filename = "anka.txt";
        PrintWriter printing = null;
        BufferedReader read = null;
        BufferedReader perform = null;
        String command = null;
        String results = null;

        System.out.println("****************************************************************");
        System.out.println("--------WELCOME TO ANKA BUSINESS SUPPORT SERVICES SYSTEM--------");
        System.out.println("****************************************************************");
        System.out.println("");

        do{
            System.out.println("-----------------------COMMAND MENU-------------------------");
            System.out.println("Register name password(8 characters) product date_of_birth(dd/mm/yyyy)");
            System.out.println("Post_product product_name  'description'");
            System.out.println("Performance");
            System.out.println("Exit");
            System.out.println("");

            System.out.println("Enter a command:");
            read = new BufferedReader(new InputStreamReader(System.in));
            
            command = read.readLine();

            printing = new PrintWriter(new FileWriter(filename, true), true);
            if(!command.equalsIgnoreCase("Exit") && !command.equalsIgnoreCase("Performance")) {
                printing.print(command);
                printing.println();
                printing.close();
            }
            if(command.equalsIgnoreCase("Performance")) {
                perform = new BufferedReader(new InputStreamReader(new FileInputStream("anka.txt")));
                results = perform.readLine();
                System.out.println(results);
                System.out.println("");
            }
            
        }while(!command.equalsIgnoreCase("Exit"));
        
        
    }
    
}
