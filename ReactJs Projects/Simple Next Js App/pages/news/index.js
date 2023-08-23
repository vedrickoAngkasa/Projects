import React from "react";
import { Fragment } from "react";
import Link from "next/link";

function HomePage() {
  return (
    <Fragment>
      <h1>The Home Page</h1>
      <ul>
        <li>
          <Link href="/news/nextjs">NextJS Is a great framework</Link>
        </li>
        <li>Something else</li>
      </ul>
    </Fragment>
  );
}

export default HomePage;
