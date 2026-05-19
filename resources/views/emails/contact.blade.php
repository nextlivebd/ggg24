<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>New Contact Form Submission</h2>
    <p>You have received a new message from the website contact form.</p>
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold; width: 120px;">Name:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Email:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Subject:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['subject'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold; vertical-align: top;">Message:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{!! nl2br(e($data['message'])) !!}</td>
        </tr>
    </table>
</body>
</html>
