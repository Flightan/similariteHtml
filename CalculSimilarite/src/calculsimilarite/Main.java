/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package calculsimilarite;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
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
        System.out.println("Calcul de similarite");
        try {
            System.out.println("1ere URL: " + args[0]);
            System.out.println("2eme URL: " + args[1]);

            String html1 = parseHtml(args[0]);
            String html2 = parseHtml(args[1]);

            FormatDocument formatter = new FormatDocument();

            html1 = formatter.format(html1, new TreeMap());

        } catch (IOException e) {
            System.out.println("Usage:CalculSimilarite www.spoonify.com www.orange.fr");
            Logger.getLogger(Main.class.getName()).log(Level.SEVERE, null, e);
        } finally {
            try {
                reader.close();
            } catch (IOException ex) {
                Logger.getLogger(Main.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    private static String parseHtml(String strUrl) throws MalformedURLException, IOException {
        URL url = new URL(strUrl);
        BufferedReader reader = new BufferedReader(new InputStreamReader(url.openStream()));
        TagParser parser = new TagParser();

        new ParserDelegator().parse(reader, parser, true);

        return parser.resHtml.toString();
    }
}
