# experiencethewest.com

This site changes yearly, below you will find a list of expected changes and instructions on how to carry them out.

## Ideas for technical improvement.

- Enforce consistent image ratios to ensure images are the correct size. Size is set in HTML, should remove sizes in HTML and recreate in CSS. This will ensure images are always formated correctly and don't appear blurry.
- Uppdate to HTML5 standard.
  - Remove HTML structure and style with CSS.
  - Create HTML templates and serve with JS all repeated elements.
- Remove old and unused redirection rules in .htaccess
  - Remove the need to enter file extensions in the browser. (index.html --> index)
- Should load analytics script from separate script file for best practice.

# Image optimization instructions.

1. Reduce the size of images by 30% and save as png if transparent and jpeg if not transparent (compress if needed.)
2. Name final images the same as last year.
3. Save into images/yearly/{current year +1}
4. Update folder links in HTML to current year +1.
5. When finished, remove the previous year's folder to be saved on the client's local storage.

# Yearly web changes.

## index.html

1. Change 6 dates to 2023.
2. Recreate top right combined calendar image with images/yearly/20xx_Cover_2_mini.psd
   - Increase Year by 1 in photoshop template.
   - Export as /images/yearly/2023/2023_Cover_2_mini.png size 600 x 414
3. Recreate bottom left calendar image with images/yearly/20xx_Cover_4.psd
   - Increase Year by 1 in photoshop template.
   - Export as images/yearly/{current year +1}/2023_Cover_4.png size 300 x 250

## calendar2.html

**Consider renaming to calendar.html, there is no longer a calendar.html so no need for calendar2.html**

1. Change 1 date to 2023.
2. Replace top calendar image with Combined_Ad_23_A.png
3. Recreate or replace slide show. Start with Cover_Ad_23.jpg and put month & year on images; These images are abbreviated accordingly to month as RR_Appt23_01.jpg (etc.) (with (01) being the month.) This was originally done using animations in photoshop. Need to get the template from the client.

## prices2022.html

**Consider updating file name to prices.html to stop having to update URL every year.**

1. Adjust prices (add 8 cents to each price)
2. Change 1 date to 2023 on the very top.
3. Change 2 dates to 2022 on the next two lines below.

## reserve.html

1. Change 2 dates to 2022.
2. Replace top image with Combined_Ad_23_A png
3. Replace bottom image with Cover_Ad_23.png

## RRBusinessCalendars.html

1. Replace calendar image with Cover_Ad_23.png

## jumbo.html

1. Change 2 dates to 2023.
2. Pricing stays the same.
3. Recreate "NEW" starburst image with images/yearly/Jumbo_New_template_Full.psd
   - Export as images/yearly/{current year +1}/Jumbo_New_HeadEmUp_Ad_23.png size 869 x 1280
4. Replace the old "NEW" image with the "NEW" starburst image.
   - Under the image update the calendar title and style: Head 'Em Up Move 'Em Out #HMO17
   - Replicate any text style provided on the website.
   - Description change: CALLING ALL HANDS... We've got cattle to move! It's always fun to see a nice bunch of calves coming off grass. "Head 'Em Up Move 'Em Out" puts you front and center in the middle of the action and makes you want to blurt out... _get along little doggie!_
5. Replace the old calendar image on the right with Jumbo_PunchinCows_Ad_23.jpg
   - Under the image update the calendar title and style: Punchin' Cows at Crow Creek #PCC14
   - Replicate any text style provided on the website.
   - Description change: Do you ever long to saddle up your favorite horse, and go on a cattle drive? A good horse, blue sky, tall grass, beautiful cattle… it just doesn't get any more western than this! _Punchin' Cows at Crow Creek will make you bust out and start singing the theme to Rawhide!_

## jumbosamp.html

1. Replace the old calendar image on the left with: Jumbo_New_HeadEmUp_Ad_23.png
   - Update title to Head 'Em Up Move 'Em Out and Style to #HMO17
2. Replace the old calendar image on the right with Jumbo_PunchinCows_Ad_23.jpg
   - Update title to Punchin' Cows at Crow Creek and Style to #PCC14

## jumbores.html

1. Change the date to read 2022. “Reserve yours today! Nothing is due until November 1, 2022.”
