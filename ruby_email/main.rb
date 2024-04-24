require 'mail'
# Set up SMTP settings
Mail.defaults do
delivery_method :smtp, {
address: 'smtp.gmail.com',
port: 587,
domain:'smtp.gmail.com',
user_name: 'amaychandravanshi2003@gmail.com',
password: 'put_password_here',
authentication: :plain,
enable_starttls_auto: true
}
end
# Email details
from_email = 'amaychandravanshi2003@gmail.com'
to_email = 'amay.chandravanshi21@pccoepune.org'
subject = 'Test Email from Ruby Script'
body = 'Well, I guess it works!'
# Create the email
mail = Mail.new do
from from_email
to to_email
subject subject
body body
end
# Send the email
begin
mail.deliver!
puts "Email sent successfully."
rescue StandardError => e
puts "Error sending email: #{e.message}"
end

