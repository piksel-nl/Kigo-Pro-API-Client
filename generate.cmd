docker run --rm -v %cd%:/local openapitools/openapi-generator-cli generate -i /local/openapi.json -g php -o /local/out/php --additional-properties=invokerPackage=Piksel\Kigo --additional-properties=apiPackage=ChannelsV2\Api --additional-properties=modelPackage=ChannelsV2\Model