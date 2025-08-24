🪪 Digital ID Card Generator (CSV-Based with Photo Support)
A simple and responsive PHP-based digital employee ID card system that 
reads employee data froma .csv file and shows profile pictures from a folder. 
Easily scalable and customizable for internal use, with optional 
QR code functionality and Google Sheets support.

📦 Project Structure
/DIGITAL ID CARD/
│
├── index.php                  # Main script to read CSV and display ID card
├── DIGITAL ID CARD.csv        # CSV file with employee data
├── /Employee photo/           # Folder containing employee profile photos
└── README.md                  # Project documentation
📋 Features
Digital ID card with clean and modern layout

Employee data read from a .csv file

Profile photo display (image name matches employee ID or name)


Optional QR Code for verification

Easy to deploy on any PHP-compatible server

Can be enhanced with Google Sheets integration

Sample Output

📥 CSV Format (Required Columns)
Your DIGITAL ID CARD.csv should follow this format:

Employee ID,Name,Designation,DOB,Blood Group,Emergency Number,Photo
AT00177,Saurav Dhawale,Digital Marketing,22-07-2003,O-,8668514452,saurav.jpg
Photo should match the image filename in the /Employee photo/ folder.

🚀 How to Run
Clone the repo:
git clone https://github.com/your-username/digital-id-card.git
Move to your XAMPP or PHP server folder (e.g., htdocs)

Access in browser:

arduino

http://localhost/digital-id-card//index.php?rid=AT000..
✅ Future Enhancements
QR Code generation for each employee ID
Google Sheets integration for live data
Admin panel for uploading photos & CSVs
Download as PDF or print support

