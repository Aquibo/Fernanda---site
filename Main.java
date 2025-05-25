public class Main {
    public static void main(String[] args) {
        try {
            EmailSender.sendEmail(
                "destinatario@exemplo.com",
                "Assunto do E-mail",
                "Olá! Esta é uma mensagem enviada pelo site."
            );
        } catch (Exception e) {
            System.err.println("Erro ao enviar e-mail: " + e.getMessage());
            e.printStackTrace();
        }
    }
}
