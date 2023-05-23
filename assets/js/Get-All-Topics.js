let pageContent = document.body.innerHTML;
let regex = /(?<=data-group-id=")(.*?)(?=")/g;
let matchesTopics = pageContent.match(regex);
let results_topics = [];

for (let i = 0; i < matchesTopics.length; i++) {
    results_topics.push(matchesTopics[i]);
}