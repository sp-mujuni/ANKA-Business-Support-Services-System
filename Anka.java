import java.io.*;

public class Anka {

    //do not create an object to access main (it is static)
    public static void main(String[] args) throws IOException, FileNotFoundException {
        String filename = "ankarequests.txt";
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
            System.out.println("register name password(8 characters) product date_of_birth(dd-mm-yyyy)");
            System.out.println("post_product 'description' rate stocksize");
            System.out.println("performance name product");
            System.out.println("exit");
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
                perform = new BufferedReader(new InputStreamReader(new FileInputStream("crondata.txt")));
                results = perform.readLine();
                System.out.println("Your performance results appear after one minute!");
                System.out.println("Performance results: "+results);
                System.out.println("");
                System.out.println("");
                System.out.println("");
            }
            
        }while(!command.equalsIgnoreCase("Exit"));
        
        
    }
    
}
