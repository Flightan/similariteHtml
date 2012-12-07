/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package calculsimilarite;

import java.io.File;
import java.io.FileReader;
import java.io.IOException;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;
import java.util.Scanner;
import java.util.TreeMap;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author florian
 */
public class TFIDFCalculator {

    private final File folder;
    public ArrayList<String> corpus;
    public ArrayList<TreeMap<String, Integer>> corpusWords;

    /**
     * Constructor.
     *
     * @param FileName full name of an existing, readable file of dictionnary.
     */
    public TFIDFCalculator(ParseDico dico, FormatDocument formatter) {
        URL url = getClass().getResource("Resources");
        folder = new File(url.getPath());

        File[] listFiles = folder.listFiles();

        for (int i = 0; i < listFiles.length; i++) {
            try {
                corpus.add(parseHtml(listFiles[i], dico, formatter));
            } catch (IOException ex) {
                Logger.getLogger(ParseDico.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    private static String parseHtml(File file, ParseDico dico, FormatDocument formatter) throws MalformedURLException, IOException {
        return formatter.format(new FileReader(file).toString(), dico.map);
    }

    public void GenerateCorpusWords() {
        for (String doc : corpus) {
            Scanner scanner = new Scanner(doc);

            int lastIndex = 0;
            int count = 0;
            TreeMap<String, Integer> currentDocMap = new TreeMap<String, Integer>();

            try {
                while (scanner.hasNext()) {
                    String current = scanner.next();
                    lastIndex = doc.indexOf(current, lastIndex);

                    if (lastIndex != -1) {
                        count++;
                        lastIndex += current.length();
                    }
                    currentDocMap.put(current, count);
                }
            } finally {
                scanner.close();
            }
        }
    }
}
