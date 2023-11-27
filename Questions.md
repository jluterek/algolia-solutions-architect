**Question 1**

From: marissa@startup.com  
Subject: Bad design

Hello,

Sorry to give you the kind of feedback that I know you do not want to hear, but I really hate
the new dashboard design. Clearing and deleting indexes are now several clicks away. I am
needing to use these features while iterating, so this is inconvenient.

Thanks,  
Marissa

**Response**

Dear Marissa,

I appreciate your candid feedback on the new design. I know the dashboard team work hard to build  a fast and intuitive solution so I will be sure to pass on this feedback. I’d like to understand a bit more about your specific use-case.

1.	What are you working on when clearing and deleting indexes?
2.	Can you walk me through the steps you usually take in this process?
3.	Aside from managing indexes, are there any other parts of this process that could be improved?
4.	How often are you clearing or deleting indexes?

If possible, it would also be helpful to hop on a call, both so I could understand the issue and to also determine if there are alternatives that can immediately address this need.

With Algolia being an API-First solution, we may be able to leverage the API directly, the CLI (https://www.algolia.com/doc/tools/cli/get-started/overview/), or build out a bookmarklet to speed up this step.

Here is my calendly link to quickly schedule a meeting or you can send over some available time slots you have in the next few days.

Thanks,  
James

---

**Question 2**

From: carrie@coffee.com  
Subject: URGENT ISSUE WITH PRODUCTION!!!!

Since today 9:15am we have been seeing a lot of errors on our website. Multiple users have
reported that they were unable to publish their feedbacks and that an alert box with "Record
is too big, please contact enterprise@algolia.com".

Our website is an imdb like website where users can post reviews of coffee shops online.
Along with that we enrich every record with a lot of metadata that is not for search. I am
already a paying customer of your service, what else do you need to make your search work?

Please advise on how to fix this. Thanks.

**Response**  
*ASSUMPTION:* I was able to lookup that they are on the Premium plan.

Hi Carrie,

Thank you for reaching out, I can understand the frustration with errors in production so hopefully we can find a quick fix. The “Record is too big” error is due to the individual record size exceeding Algolia’s limits. This can happen when dealing with large data sets. The limits range from 10KB to 100KB depending on your plan (https://support.algolia.com/hc/en-us/articles/4406981897617-Is-there-a-size-limit-for-my-index-records-).

We need to limit the size of the records being inserted. You mentioned having a lot of metadata that is not related to search, this should be removed from the search index, both to avoid this error and improve performance of the search. You can see an example of best practices in the docs (https://www.algolia.com/doc/guides/sending-and-managing-data/prepare-your-data/how-to/reducing-object-size/).  If you are still seeing the error after removing the metadata we can consider additional options such as breaking up each record into multiple items.

I’d also recommend adding additional error handling to the code. The code should catch any potential errors, log them, and implement a fallback process. The full data payload could be saved in your database to be synced later after identifying and addressing the errors. This would ensure no information is lost and provide a more friendly experience for your users.

I believe that removing the metadata should fix the problem, but if not, I’ll need a better understanding of your current implementation and data structure. If the error persists, please provide an example of a typical record? Also, the code snippets generating this error may be helpful.

Once we have this urgent error handled, I am available to review your requirements and implementation to identify any other potential improvements.

Thank you,  
James

---

**Question 3**

From: marc@hotmail.com  
Subject: Error on website

Hi, my website is not working and here's the error:

```
Uncaught ReferenceError: searchkit is not defined
   at Object.parcelRequire.6 (index.js:1)
   at newRequire (broken-webkitRequestAnimationFrame.47b209d0.js:48)
   at parcelRequire.6 (broken-webkitRequestAnimationFrame.47b209d0.js:75)
   at broken-webkitRequestAnimationFrame.47b209d0.js:101
```

Can you fix it please?

**Response**

Hi Marc,

Thanks for reaching out, I’m sorry to hear you are hitting errors in the code.

Based on the error message you’ve provided, “Uncaught ReferenceError: searchkit is not defined,” it appears that you are trying to leverage the open source searchkit UI. The not defined error is a common problem that can occur when a library is missing, or scripts are not imported correctly. A few things I’d consider:

1.	Check that the Searchkit library is correctly included in your project. React, Vue, Angular, and Svelte typically use a package manager, so I would verify it is listed in the package.json file under dependencies.
2.	If you are not adding it via a package manager, make sure the &lt;script> tag pulling in the library exists and is placed before any code trying to use searchkit.
3.	Be sure to clear your browser cache. Sometimes outdated scripts can be loaded.

If you could provide some more context around your code (e.g., how you are including Searchkit, why type of bundler you are using, are you leveraging a framework like Next.js, etc.), it could help me narrow down the problem. Alternatively, if you can share access to the project, I can help track this down.

I hope this helps,  
James
