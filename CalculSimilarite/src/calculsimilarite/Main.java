/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package calculsimilarite;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.URL;
import java.util.TreeMap;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.text.html.parser.ParserDelegator;

/**
 *
 * @author florian
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        BufferedReader reader = null;
        try {
            URL url = new URL(args[0]);
            reader = new BufferedReader(new InputStreamReader(url.openStream()));
            TagParser parser = new TagParser();

            new ParserDelegator().parse(reader, parser, true);

            FormatDocument formatter = new FormatDocument(parser.resHtml.toString());
            formatter.format(new TreeMap());
        } catch (IOException e) {
            Logger.getLogger(Main.class.getName()).log(Level.SEVERE, null, e);
        } finally {
            try {
                reader.close();
            } catch (IOException ex) {
                Logger.getLogger(Main.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
}
