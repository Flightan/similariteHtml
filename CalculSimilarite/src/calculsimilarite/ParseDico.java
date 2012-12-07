/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package calculsimilarite;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Michoute
 */
public class ParseDico {
    
    private final File folder = new File("/Resources");
    public Map<String, String> dico = new TreeMap<String, String>();

    /**
     * Constructor.
     *
     * @param FileName full name of an existing, readable file of dictionnary.
     */
    public ParseDico() {
        File[] listFiles = folder.listFiles();
        System.out.println(listFiles);
        
        for (int i = 0; i < listFiles.length; i++) {
            try {
                processLineByLine(listFiles[i]);
            } catch (FileNotFoundException ex) {
                Logger.getLogger(ParseDico.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    public final void processLineByLine(File fFile) throws FileNotFoundException {
        
        Scanner scanner = new Scanner(new FileReader(fFile));
        
        try {
            while (scanner.hasNextLine()) {
                processLine(scanner.nextLine());
            }
        } finally {
            scanner.close();
        }
    }
    
    protected void processLine(String line) {
        Scanner scanner = new Scanner(line);
        scanner.useDelimiter("  ");
        
        if (scanner.hasNext()) {
            String word = scanner.next();
            String replacedValue = scanner.next();
            String type = scanner.next();
            
            String[] token = type.split(":");
            
            if ("Nom".equals(token[0]) || "Ver".equals(token[0]) || "Adj".equals(token[0])) {
                dico.put(word, replacedValue);
            } else {
                dico.put(word, " ");
            }
            System.out.println("Word : " + word + ", replaced value : " + replacedValue);
        } else {
            System.out.println("Empty or invalid line.");
        }
    }
}
