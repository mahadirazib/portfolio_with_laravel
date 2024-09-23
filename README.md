# Portfolio Template

This is a responsive portfolio template build with laravel and tailwind css. Just edot the onformation according to your needs and the portfolio is ready.

## Customize

To update the information you dont need to change any code. Just edit the json files inside storage/data directory.

### Edit Introduction page info:

personal_info.json file is used in the index page. edit the information according to it's name. for the social links if you don't want to give any information then set "null" to those fields. 
Make sure to use "https://" before any links. And don't usee the + sign for whatsapp and please assign country code for this. 
The image is located inside storage/app/images directory. Just assign the name of the image with it's format.

### Edit Projects page info:

projects.json file is used for projects page. The format of this page is like:\
  "Name of the section": {\
    "unique_name": {\
      "name"        : "Name of the Project",\
      "description" : "Description of the project.",\
      "link_to_view": "Link to the live project(If the site is live on internet).",\
      "link_to_repo": "Link to github repository(if it is uploaded in github).",\
      "images": ["image1.format", "image2.format", ..... ]\
    },\
    ............\
  }\
The project images is held in the storage/app/public/project_images directory. Just specify the name opf the images in the json file. And make sure to start any links with "https://".

### Edit Experiences page info:

experience.json file is used for experiences page. There are two part in this page. "description", "experiences". Inside the experiences the format looks like this:
  "experiences": {
    "Company name": {
      "designation": "Designation or title of your job",
      "from": "start date",
      "to": "end date"
    }
    ...........
  }

### Edit Skills page info:

skills.json file is used for this page. The format of the json file looks like this:
  "Name of the Section": {
    "Skill Name": "familiarity%"
    ...............
  }
make sure to assign integer value and add a "%"(percentage sign) in the end.

### Make the Contact page Working:

If you want the contact page to work properly then create a gmail app. And change the values in the .env file accordingly.

## Conclusion

This is a fully functional template that you can use to build your portfolio right away. Just edit the informations and the portfolio is ready.
If you host this portfolio in the web then after deploying go to "yoursite.com/make_symlink" this route for linking the files properly.

# Thank you

