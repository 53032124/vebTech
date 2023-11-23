function createPageBtn(page, classes = []) {
    let btn = document.createElement('button');
    classes.push('btn');
    for (let cls of classes) {
        btn.classList.add(cls);
    }
    btn.dataset.page = page;
    btn.innerHTML = page;
    return btn;
}

function renderPaginationElement(info) {
    let btn;
    let paginationContainer = document.querySelector('.pagination');
    paginationContainer.innerHTML = '';

    btn = createPageBtn(1, ['first-page-btn']);
    btn.innerHTML = 'Первая страница';
    if (info.current_page === 1) {
        btn.style.visibility = 'hidden';
    }
    paginationContainer.append(btn);

    let buttonsContainer = document.createElement('div');
    buttonsContainer.classList.add('pages-btns');
    paginationContainer.append(buttonsContainer);

    let start = Math.max(info.current_page - 2, 1);
    let end = Math.min(info.current_page + 2, info.total_pages);
    for (let i = start; i <= end; i++) {
        buttonsContainer.append(createPageBtn(i, i === info.current_page ? ['active'] : []));
    }

    btn = createPageBtn(info.total_pages, ['last-page-btn']);
    btn.innerHTML = 'Последняя страница';
    if (info.current_page === info.total_pages) {
        btn.style.visibility = 'hidden';
    }
    paginationContainer.append(btn);
}

function perPageBtnHandler() {
    downloadData(1);
}

function setPaginationInfo(info) {
    document.querySelector('.total-count').innerHTML = info.total_count;
    document.querySelector('.current-interval-start').innerHTML = (info.total_count > 0 ? (info.current_page - 1) * info.per_page + 1 : 0).toString();
    document.querySelector('.current-interval-end').innerHTML = Math.min(info.total_count, start + info.per_page - 1).toString();
}

function pageBtnHandler(event) {
    if (event.target.dataset.page) {
        downloadData(event.target.dataset.page);
        window.scrollTo(0, 0);
    }
}

function createAuthorElement(record) {
    let user = record.user || {'name': {'first': '', 'last': ''}};
    let authorElement = document.createElement('div');
    authorElement.classList.add('author-name');
    authorElement.innerHTML = user.name.first + ' ' + user.name.last;
    return authorElement;
}

function createUpvotesElement(record) {
    let upvotesElement = document.createElement('div');
    upvotesElement.classList.add('upvotes');
    upvotesElement.innerHTML = record.upvotes;
    return upvotesElement;
}

function createFooterElement(record) {
    let footerElement = document.createElement('div');
    footerElement.classList.add('item-footer');
    footerElement.append(createAuthorElement(record));
    footerElement.append(createUpvotesElement(record));
    return footerElement;
}

function createContentElement(record) {
    let contentElement = document.createElement('div');
    contentElement.classList.add('item-content');
    contentElement.innerHTML = record.text;
    return contentElement;
}

function createListItemElement(record) {
    let itemElement = document.createElement('div');
    itemElement.classList.add('facts-list-item');
    itemElement.append(createContentElement(record));
    itemElement.append(createFooterElement(record));
    return itemElement;
}

function renderRecords(records) {
    let factsList = document.querySelector('.facts-list');
    factsList.innerHTML = '';
    for (let i = 0; i < records.length; i++) {
        factsList.append(createListItemElement(records[i]));
    }
}

function downloadData(page = 1, q = "") {
    let factsList = document.querySelector('.facts-list');
    let url = new URL(factsList.dataset.url);
    let perPage = document.querySelector('.per-page-btn').value;
    url.searchParams.append('page', page.toString());
    url.searchParams.append('per-page', perPage);
    url.searchParams.append("q", q);
    let xhr = new XMLHttpRequest();
    xhr.open('GET', url);
    xhr.responseType = 'json';
    xhr.onload = function () {
        renderRecords(this.response.records);
        setPaginationInfo(this.response['_pagination']);
        renderPaginationElement(this.response['_pagination']);
    }
    xhr.send();
}

function pageSearch() {
    downloadData(1, document.querySelector(".search-field").value);
}

function renderSearchOptions(records) {
    let search = document.querySelector('#search_box-result');
    search.replaceChildren();
    let list = document.createElement("ul");
    for (let record of records) {
        let element = document.createElement("li");
        element.textContent = record;
        element.addEventListener('click', function () {
            document.querySelector('.search-field').value = element.textContent;
            pageSearch();
            search.setAttribute('class', 'hidden');
        });
        list.append(element);
    }
    search.append(list);
    search.setAttribute("class", "");
}

function searchAutocomplete(event) {
    let search = document.querySelector('.search-field');
    if (search.value !== ' ' && search.value.length > 0) {
        let request = new XMLHttpRequest();
        let url = new URL("http://cat-facts-api.std-900.ist.mospolytech.ru/autocomplete");
        url.searchParams.append("q", event.target.value);
        request.open('GET', url);
        request.responseType = 'json';
        request.onload = function () {
            renderSearchOptions(this.response);
        }
        request.send();
    } else {
        document.querySelector("#search_box-result").setAttribute("class", "hidden");
    }
}

window.onload = function () {
    downloadData();
    document.querySelector('.pagination').onclick = pageBtnHandler;
    document.querySelector('.per-page-btn').onchange = perPageBtnHandler;
    document.querySelector('.search-btn').onclick = pageSearch;
    "input focus".split(' ').forEach(e => document.querySelector('.search-field').addEventListener(e, searchAutocomplete));
}