import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.imageio.ImageIO;

import javax.swing.JButton;
import javax.swing.JPanel;

import java.awt.event.MouseMotionListener;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;

import java.awt.event.MouseEvent;
import java.awt.event.ActionListener;

import java.awt.event.ActionEvent;

import java.awt.Container;

import java.awt.BorderLayout;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.GridBagConstraints;
import java.awt.GridBagLayout;
import java.awt.Color;
import java.awt.GridLayout;

public class Cizim extends JFrame implements MouseMotionListener,ActionListener {
    private int x = -10 , y = -10 ;
    private Color col = Color.BLACK;
   private JPanel paintPane;
    public Cizim() {
        final JPanel panel = new JPanel();
        panel.setLayout(new BorderLayout());
        JPanel bottom = new JPanel();
        bottom.setLayout(new BorderLayout());
        bottom.setVisible(true);

        //JFrame 
        setTitle("Cizim");
        setSize(800,600);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
        JPanel p= new JPanel();
        p.setLayout(new GridLayout(15,1));

        //Buton Renkleri
        JButton red = new JButton("Kirmizi");
        red.setBackground(Color.RED);
        JButton green = new JButton("Yesil");
        green.setBackground(Color.GREEN);
        JButton magenta = new JButton("Mor");
        magenta.setBackground(Color.MAGENTA);
        JButton cyan = new JButton("Turkuaz");
        cyan.setBackground(Color.CYAN);
        JButton orange = new JButton("Turuncu");
        orange.setBackground(Color.ORANGE);
        JButton yellow = new JButton("Sari");
        yellow.setBackground(Color.YELLOW);
        JButton pink = new JButton("Pembe");
        pink.setBackground(Color.pink);
        JButton blue = new JButton ("Mavi");
        blue.setBackground(new Color (51, 51, 204));
        JButton gray = new JButton("Gri");
        gray.setBackground(Color.GRAY);
        JButton black = new JButton("Siyah");
        black.setBackground(Color.BLACK);
        JButton white = new JButton("Silgi");
        white.setBackground(Color.WHITE);

        //

        p.add(red);
        p.add(green);
        p.add(magenta);
        p.add(cyan);
        p.add(orange);
        p.add(yellow);
        p.add(pink);
        p.add(blue);
        p.add(gray);
        p.add(black);
        p.add(white);


        red.addActionListener(this);
        green.addActionListener(this);
        magenta.addActionListener(this);
        cyan.addActionListener(this);
        orange.addActionListener(this);
        yellow.addActionListener(this);
        pink.addActionListener(this);
        blue.addActionListener(this);
        gray.addActionListener(this);
        black.addActionListener(this);
        white.addActionListener(this);  //Beyaz rengi silgi olarak kullandım.

        Container c = this.getContentPane();
        c.setLayout(new BorderLayout());
        JLabel instructions = new JLabel("Cizmek icin fareyi hareket ettirin.", JLabel.RIGHT);
        c.add(instructions, BorderLayout.SOUTH);
        c.add(p, BorderLayout.WEST);
        c.addMouseMotionListener(this);
        setVisible(true);

        //Kaydetme kısmı
        paintPane = new JPanel(new GridBagLayout());
        GridBagConstraints gbc = new GridBagConstraints();
        gbc.gridwidth = GridBagConstraints.REMAINDER;
        setLayout(new BorderLayout());
        add(paintPane);

       JButton save = new JButton("Kaydet");
        save.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
            	BufferedImage bImg = new BufferedImage(paintPane.getWidth(), paintPane.getHeight(), BufferedImage.TYPE_INT_RGB);
                Graphics2D cg = bImg.createGraphics();
               paintPane.paintAll(cg);
                try {
                        if (ImageIO.write(bImg, "jpeg", new File("./Cizim.jpeg")))
                        {
                            System.out.println("kaydedildi.");
                        }
                } catch (IOException exp) {
                        // TODO Auto-generated catch block
                        exp.printStackTrace();
                }
            }
        });
        add(save, BorderLayout.SOUTH);
     //
        }
        public void actionPerformed(ActionEvent e) {
        String act = e.getActionCommand();
        if(act.equals("Mavi"))
            col = new Color(51, 51, 204);
        else if(act.equals("Kirmizi"))
            col = Color.RED;
        else if(act.equals("Yesil"))
            col = Color.GREEN;
        else if(act.equals("Mor"))
            col = Color.MAGENTA;
        else if(act.equals("Turkuaz"))
            col = Color.CYAN;
        else if(act.equals("Turuncu"))
            col = Color.ORANGE;
        else if(act.equals("Sari"))
            col = Color.YELLOW;
        else if(act.equals("Pembe"))
            col = Color.PINK;
        else if(act.equals("Gri"))
            col = Color.GRAY;
        else if(act.equals("Siyah"))
            col = Color.BLACK;
        else if(act.equals("Silgi"))
            col = Color.WHITE;
        else//bunlardan biri değilse renk siyah olsun
            col = Color.BLACK;
        }  

    public void mouseMoved(MouseEvent e) {
    }
    public void mouseDragged(MouseEvent e) {
        x = e.getX(); y= e.getY();
        repaint();// özel parametre ile çağrılan çizim metodu

    }
    public void paint(Graphics g) {
        g.setColor(col);
        g.fillRect(x, y, 10, 10);
    }


	public void paintComponent(Graphics g) {// bu Kısımda kaydetme ile ilgili kısım içine giriyor.
		super.paintComponents(g);
	}
    public static void main (String args[]) {

        Cizim czm = new Cizim();
			}

}