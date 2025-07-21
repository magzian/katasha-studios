<div style="background: #f8fafc; padding: 32px; font-family: 'Poppins', Arial, sans-serif; color: #222;">
    <div style="max-width: 500px; margin: 0 auto; background: #fff; border-radius: 16px; box-shadow: 0 4px 24px rgba(80, 80, 80, 0.08); overflow: hidden;">
        <div style="background: linear-gradient(90deg, #8b5cf6 0%, #ec4899 100%); padding: 24px 0; text-align: center;">
            <span style="font-size: 2rem;">🖨️</span>
            <h2 style="margin: 8px 0 0 0; font-size: 1.5rem; color: #fff; font-weight: 700; letter-spacing: 1px;">PrintWorks Contact Submission</h2>
        </div>
        <div style="padding: 32px 24px;">
            <h3 style="margin-bottom: 16px; font-size: 1.2rem; color: #8b5cf6; font-weight: 600;">Contact Details</h3>
            <table style="width: 100%; margin-bottom: 24px;">
                <tr>
                    <td style="font-weight: 500; color: #555; width: 120px;">Name:</td>
                    <td style="color: #222;">{{ $contactFormSubmission->name }}</td>
                </tr>
                <tr>
                    <td style="font-weight: 500; color: #555;">Email:</td>
                    <td style="color: #222;">{{ $contactFormSubmission->email }}</td>
                </tr>
            </table>
            <h3 style="margin-bottom: 12px; font-size: 1.2rem; color: #ec4899; font-weight: 600;">Message</h3>
            <div style="background: #f3f4f6; border-radius: 8px; padding: 16px; color: #333; font-size: 1rem; line-height: 1.6;">
                {{ $contactFormSubmission->message }}
            </div>
        </div>
        <div style="background: #f3f4f6; text-align: center; padding: 16px; color: #888; font-size: 0.95rem;">
            &copy; {{ date('Y') }} PrintWorks. Thank you for reaching out!
        </div>
    </div>
</div>