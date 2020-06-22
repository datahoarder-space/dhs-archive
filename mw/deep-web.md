The deep web, invisible web, or hidden web are parts of the World Wide Web whose contents are not indexed by standard web search engines for any reason. The opposite term to the deep web is the surface web, which is accessible to anyone using the Internet. Computer scientist Michael K. Bergman is credited with coining the term deep web in 2001 as a search indexing term

The content of the deep web is hidden behind HTTP forms, and includes many very common uses such as web mail, online banking, and services that users must pay for, and which is protected by a paywall, such as video on demand, some online magazines and newspapers, and many more.

Content of the deep web can be located and accessed by a direct URL or IP address, and may require password or other security access past the public website page.


== Terminology ==

The first conflation of the terms "deep web" and "dark web" came about in 2009 when the deep web search terminology was discussed alongside illegal activities taking place on the Freenet darknet.

Since then, the use in the Silk Road's media reporting, many people and media outlets, have taken to using Deep Web synonymously with the dark web or darknet, a comparison many reject as inaccurate and consequently is an ongoing source of confusion. Wired reporters Kim Zetter and Andy Greenberg recommend the terms be used in distinct fashions. While the deep web is reference to any site that cannot be accessed through a traditional search engine, the dark web is a portion of the deep web that has been intentionally hidden and is inaccessible through standard browsers and methods.


== Non-indexed content ==

Bergman, in a paper on the deep web published in The Journal of Electronic Publishing, mentioned that Jill Ellsworth used the term Invisible Web in 1994 to refer to websites that were not registered with any search engine. Bergman cited a January 1996 article by Frank Garcia:

It would be a site that's possibly reasonably designed, but they didn't bother to register it with any of the search engines. So, no one can find them! You're hidden. I call that the invisible Web.

Another early use of the term Invisible Web was by Bruce Mount and Matthew B. Koll of Personal Library Software, in a description of the #1 Deep Web tool found in a December 1996 press release.

The first use of the specific term deep web, now generally accepted, occurred in the aforementioned 2001 Bergman study.


== Indexing methods ==

Methods which prevent web pages from being indexed by traditional search engines may be categorized as one or more of the following:

Contextual web: pages with content varying for different access contexts (e.g., ranges of client IP addresses or previous navigation sequence).

Dynamic content: dynamic pages which are returned in response to a submitted query or accessed only through a form, especially if open-domain input elements (such as text fields) are used; such fields are hard to navigate without domain knowledge.

Limited access content: sites that limit access to their pages in a technical way (e.g., using the Robots Exclusion Standard or CAPTCHAs, or no-store directive which prohibit search engines from browsing them and creating cached copies).

Non-HTML/text content: textual content encoded in multimedia (image or video) files or specific file formats not handled by search engines.

Private web: sites that require registration and login (password-protected resources).

Scripted content: pages that are only accessible through links produced by JavaScript as well as content dynamically downloaded from Web servers via Flash or Ajax solutions.

Software: certain content is intentionally hidden from the regular Internet, accessible only with special software, such as Tor, I2P, or other darknet software. For example, Tor allows users to access websites using the .onion server address anonymously, hiding their IP address.

Unlinked content: pages which are not linked to by other pages, which may prevent web crawling programs from accessing the content. This content is referred to as pages without backlinks (also known as inlinks). Also, search engines do not always detect all backlinks from searched web pages.

Web archives: Web archival services such as the Wayback Machine enable users to see archived versions of web pages across time, including websites which have become inaccessible, and are not indexed by search engines such as Google.


== Content types ==

While it is not always possible to directly discover a specific web server's content so that it may be indexed, a site potentially can be accessed indirectly (due to computer vulnerabilities).

To discover content on the web, search engines use web crawlers that follow hyperlinks through known protocol virtual port numbers. This technique is ideal for discovering content on the surface web but is often ineffective at finding deep web content. For example, these crawlers do not attempt to find dynamic pages that are the result of database queries due to the indeterminate number of queries that are possible. It has been noted that this can be (partially) overcome by providing links to query results, but this could unintentionally inflate the popularity for a member of the deep web.

DeepPeep, Intute, Deep Web Technologies, Scirus, and Ahmia.fi are a few search engines that have accessed the deep web. Intute ran out of funding and is now a temporary static archive as of July 2011. Scirus retired near the end of January 2013.

Researchers have been exploring how the deep web can be crawled in an automatic fashion, including content that can be accessed only by special software such as Tor. In 2001, Sriram Raghavan and Hector Garcia-Molina (Stanford Computer Science Department, Stanford University) presented an architectural model for a hidden-Web crawler that used key terms provided by users or collected from the query interfaces to query a Web form and crawl the Deep Web content. Alexandros Ntoulas, Petros Zerfos, and Junghoo Cho of UCLA created a hidden-Web crawler that automatically generated meaningful queries to issue against search forms. Several form query languages (e.g., DEQUEL) have been proposed that, besides issuing a query, also allow extraction of structured data from result pages. Another effort is DeepPeep, a project of the University of Utah sponsored by the National Science Foundation, which gathered hidden-web sources (web forms) in different domains based on novel focused crawler techniques.

Commercial search engines have begun exploring alternative methods to crawl the deep web. The Sitemap Protocol (first developed, and introduced by Google in 2005) and mod oai are mechanisms that allow search engines and other interested parties to discover deep web resources on particular web servers. Both mechanisms allow web servers to advertise the URLs that are accessible on them, thereby allowing automatic discovery of resources that are not directly linked to the surface web. Google's deep web surfacing system computes submissions for each HTML form and adds the resulting HTML pages into the Google search engine index. The surfaced results account for a thousand queries per second to deep web content. In this system, the pre-computation of submissions is done using three algorithms:

selecting input values for text search inputs that accept keywords,

identifying inputs which accept only values of a specific type (e.g., date), and

selecting a small number of input combinations that generate URLs suitable for inclusion into the Web search index.

In 2008, to facilitate users of Tor hidden services in their access and search of a hidden .onion suffix, Aaron Swartz designed Tor2web—a proxy application able to provide access by means of common web browsers. Using this application, deep web links appear as a random string of letters followed by the .onion TLD.
